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
        $products = Product::all();
        return view('admin/product',compact('products'));
    }
    function getAddProduct(){
        return view('admin/addproduct');
    }
    function postAddProduct(Request $req){
        // $input =[
        //     'masp' => 'required',
        //     // 'password' => 'required'
        //     'soluong' => 'numeric'
        // ];
        // $mess = [
        //     'masp.required' => 'Điền mã sản phẩm',
        //     'soluong.numeric' => 'Nhập số cho số lượng sản phẩm'
        //     // 'password.required' => 'Vui lòng điền mật khẩu'
        // ];
        // $validator = Validator::make($req->all(),$input,$mess);
        // if($validator->fails()){
        //     return redirect()->route('product')->withErrors($validator)->withInput();
        // }
        $product = new Product;
        $product->tensp = $req->tensp;
        $product->masp = $req->masp;
        $product->hangsx = $req->hangsx;
        $product->price = $req->price;
        $product->size = $req->size;
        $product->soluong = $req->soluong;
        $product->thongtin = $req->thongtin;
        $product->trangthai = $req->trangthai;
        if($req->hasFile('anhsp') && $req->hasFile('anhsp2')){
            $hinh = $req->file('anhsp');
            $hinh2 = $req->file('anhsp2');
            $nameImg = date('Y-m-d-H-i-s').'-'.$hinh->getClientOriginalName();
            $hinh->move('images/hinhsp',$nameImg);
            $product->anhsp = $nameImg;
            // xử lý multipe File
            foreach($hinh2 as $hinh22):
                $nameImg2 = date('Y-m-d-H-i-s').'-'.$hinh22->getClientOriginalName();
                $nameImg3[] = date('Y-m-d-H-i-s').'-'.$hinh22->getClientOriginalName();
                $hinh22->move('images/hinhphusp', $nameImg2);
            endforeach;

            $product->anhphu = implode('/',$nameImg3);
            $product->save();
            return redirect()->route('product')->with('success',"Thêm sản phẩm thành công");
        }
        else{ 
            return redirect()->route('product')->with('error',"Thêm sản phẩm thất bại");
        }
    }
    function getEditProduct($id){
        $products = Product::where('id',$id)->first();
        if($products){
            return view('admin/editproduct',compact('products'));
        }
        return redirect()->back()->with('message','Không tìm thấy sản phẩm');
    }
    function postEditProduct(Request $req){
        $product = Product::where('id',$req->id)->first();
        if($product){
            $product->tensp = $req->tensp;
            $product->masp = $req->masp;
            $product->hangsx = $req->hangsx;
            $product->price = $req->price;
            $product->size = $req->size;
            $product->soluong = $req->soluong;
            $product->thongtin = $req->thongtin;
            $product->trangthai = $req->trangthai;
            if($req->hasFile('anhsp')){
                $hinh = $req->file('anhsp');
                $nameImg = date('Y-m-d-H-i-s').'-'.$hinh->getClientOriginalName();
                $hinh->move('images/hinhsp',$nameImg);
                $product->anhsp = $nameImg;
                // xử lý multipe File

            }
            if($req->hasFile('anhsp2')){
                $hinh2 = $req->file('anhsp2');
                foreach($hinh2 as $hinh22):
                    $nameImg2[] = date('Y-m-d-H-i-s').'-'.$hinh22->getClientOriginalName();
                    $nameImg22 = implode("",$nameImg2);
                    $hinh22->move('images/hinhphusp', $nameImg22);
                    echo $nameImg22;
                endforeach;
                die;
                $product->anhphu = implode('/',$nameImg2);
            }
            $product->save();
            return redirect()->route('product')->with('success',"Sửa sản phẩm thành công");
        }
        return redirect()->back()->with('message','Không tìm thấy sản phẩm');
    }
}
