<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class LoginController extends Controller
{
    /*
    denglu
     */
    // 登录界面
    public function index() {

        return view('login');
    }
    public function login(Request $request)
    {
        //dd($request);
       $this->validate($request,[
         'username'=>'required',
         'password'=>'required',
       ]);
       $ret=auth()->attempt($request->only(['username','password']));
       //dump($ret);
         // 登录成功跳转
         if ($ret){
            return redirect(route('admin.index.index'))->with('success','登录成功');
        }
        return redirect()->back()->withErrors(['errors'=>'登录失败']);
    }


   
}
