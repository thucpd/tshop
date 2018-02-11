<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Hash;
use Validator;

class LoginController extends Controller
{
    function getRegister(){
        return view('user-register');
    }
    function postRegister(Request $req){
        if($req->check != 1){
            return redirect()->route('user_register')
            ->withErrors("Vui lòng chấp nhận điều khoản sử dụng");
        }
        $input =[
            'username'=>'required|unique:users,username',
            'password' => 'required|min:6| max:20',
            'confirm_password'=>'same:password',
            'email'=>'required|unique:users,email',
        ];
        $mess = [
                'username.required' => 'Tên đăng nhập không được rỗng',
                'username.unique' =>'Tên đăng nhập đã có người sử dụng',
                'password.required' =>'Vui lòng điền mật khẩu',
                'password.min'=>'Password ít nhất :min kí tự',
                'password.max'=>'Password tối đa :max kí tự',
                'confirm_password.same'=>'Mật khẩu xác nhận không trùng khớp',
                'email.required'=>'Email không rỗng',
                'email.email'=>'Email không đúng định dạng example@mail.com',
                'email.min'=>"Email ít nhất :min kí tự",
                'email.unique'=>"Email đã có người sử dụng"
        ];
        $validator = Validator::make($req->all(),$input,$mess);
        // dd($validator);
        if($validator->fails()) {
            return redirect()->route('user_register')
                        ->withErrors($validator)
                        ->withInput();
        }
        $user = new User;
        $user->username = $req->username;
        $user->password =  Hash::make($req->password);
        $user->name = $req->fullname;
        $user->address = $req->address;
        $user->phone = $req->phone;
        $user->gender = $req->gender;
        $user->email = $req->email;
        // $user->status = $req->check;
        // $user->usertype = "null";
        $user->save();
        if($user){
            return redirect()->route('user_login')->with('success',"Đăng kí thành công");
        }
        return redirect()->route('user_register')->with('error',"Đăng kí không thành công");
    }
    function getLogin(){
        return view('user-login');
    }
    function postLogin(Request $req){
        $input =[
            'username'=>'required',
            'password' =>'required'
        ];
        $mess = [
            'username.required' => 'Vui lòng điền tên đăng nhập',
            'password.required' => 'Vui lòng điền mật khẩu'
        ];
        $validator = Validator::make($req->all(),$input,$mess);
        // echo $req->username;
        if($validator->fails()) {
            return redirect()->route('user_login')
                        ->withErrors($validator)
                        ->withInput();
        }
        $infor =[
            'username'=>$req->username,
            'password'=>$req->password
        ];
        // dd($infor);
        $remember = $req->remember == 1 ? 1 : 0;
        if(Auth::attempt($infor,$remember)){
            //login thanh cong
            $user = Auth::user();
            // echo $user->fullname;
            // dd($user);
            return redirect()->route('/')->with('success',"Đăng nhập thành công");
        }
        else{
            return redirect()->route('user_login')->with('error',"Đăng nhập thất bại, vui lòng điền đúng thông tin");
        }
        // $user = Auth::user();
        // dd($user);
    }
}
