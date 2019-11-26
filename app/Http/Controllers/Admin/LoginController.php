<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{

    // 后台登陆显示
    public function index(){
        return view('admin/login/login');
    }


//    登陆处理

    public function login(Request $request){
        // 表单验证
        $data = $this->validate($request,[
            'username'=>'required',
            'password'=>'required',
        ]);


        $bool = auth()->attempt($data);

//        dump($bool);
////
////        dump(auth()->user());
///
        if(!$bool){
            // 用户没有登陆成功，返回登陆页面 并利用闪存给用户提示
            return redirect(route('admin.login'))->withErrors(['error'=>'账户或密码不正确']);
        }
        //登陆成功后 跳到后台首页
        return redirect(route('admin.home'));


    }


}