<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use App\Product;
class AdminController extends Controller
{
    function getView(){
        return view('admin/layout');
    }
    function getLogin(){
        return view('admin/login');
    }
    function postLogin(Request $req){
        $input =[
            'username' => 'required',
            'password' => 'required'
        ];
        $mess = [
            'username.required' => 'Vui lòng điền tên đăng nhập',
            'password.required' => 'Vui lòng điền mật khẩu'
        ];
        $validator = Validator::make($req->all(),$input,$mess);
        if($validator->fails()){
            return redirect()->route('admin_login')->withErrors($validator)->withInput();
        }
        $infor = [
            'username' => $req->username,
            'password'=> $req->password
        ];;
        $remember = $req->remember == 1 ? 1 : 0;
        if(Auth::attempt($infor,$remember)){
            //login thanh cong
            $user = Auth::user();
            return redirect()->route('index')->with('success',"Đăng nhập thành công");
        }
        else{
            return redirect()->route('admin_login')->with('error',"Đăng nhập thất bại, vui lòng điền đúng thông tin");
        }
        
    }
    function getProduct(){
        return view('admin/product');
    }
    function postProduct(Request $req){
        $input =[
            'masp' => 'required',
            // 'password' => 'required'
            'soluong' => 'numeric'
        ];
        $mess = [
            'masp.required' => 'Điền mã sản phẩm',
            'soluong.numeric' => 'Nhập số cho số lượng sản phẩm'
            // 'password.required' => 'Vui lòng điền mật khẩu'
        ];
        $validator = Validator::make($req->all(),$input,$mess);
        if($validator->fails()){
            return redirect()->route('product')->withErrors($validator)->withInput();
        }
        $product = new Product;
        $product->tensp = $req->tensp;
        $product->masp = $req->masp;
        $product->hangsx = $req->hangsx;
        $product->size = $req->size;
        $product->soluong = $req->soluong;
        $product->thongtin = $req->thongtin;
        $product->trangthai = $req->trangthai;
        // $product->anhsp = $req->anhsp;
        if($req->hasFile('anhsp')){
            $hinh = $req->file('anhsp');
            $nameImg = date('Y-m-d-H-i-s').'-'.$hinh->getClientOriginalName();
            $hinh->move('images/hinhsp',$nameImg);
           
            $product->anhsp = $nameImg;
            $product->save();
            return redirect()->route('product')->with('success',"Thêm sản phẩm thành công");
        }
        else{ 
            return redirect()->route('product')->with('error',"Thêm sản phẩm thất bại");
        }
    }
}
