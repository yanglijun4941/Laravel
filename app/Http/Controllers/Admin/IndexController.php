<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// 引入DB
use DB;
// 模型类
use App\Models\User;


class IndexController extends Controller
{
    /*
    shouye
     */
    public function index()
    {
       
     return  view('index');
    }
   
    public function adminlist(Request $request)
    {
       $username    =   $request->get('username')??'';
       $data = (new User())->getList($username, env('PAGESIZE'));
      // dd($data);
     return  view('adminlist',compact('data'));
    }
    public function adminadd()
    {
       
     return  view('./adminadd');
    }

}
