<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// 路由分组之前缀
/*
admin/login
admin/logout
admin/index/index
admin/index/welcome
*/

Route::group(['prefix'=>'admin','namespace'=>'Admin'], function () {
   Route::get('login/index','LoginController@index')->name('admin.login.index');
   Route::post('index/index','LoginController@login')->name('admin.index.index');
   Route::get('index/adminlist','IndexController@adminlist')->name('admin.index.list');
   Route::get('index/adminadd','IndexController@adminadd')->name('admin.index.adminadd');

   
});
