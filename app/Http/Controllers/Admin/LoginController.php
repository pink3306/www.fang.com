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
            return redirect(route('admin.login'))->withErrors(['error'=>'账户或密码不正确']);
        }

        return redirect(route('admin.home'));


    }
}
