<?php
// 后台路由
Route::group(['namespace'=>'Admin','prefix'=>'admin','as'=>'admin.'],function(){
    Route::get('login','LoginController@index')->name('login');
    // 后台登录处理
    Route::post('login', 'LoginController@login')->name('login');

//    后台首页
});