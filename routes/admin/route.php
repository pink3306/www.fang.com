<?php

    // 后台路由
    Route::group(['namespace'=>'Admin','prefix'=>'admin','as'=>'admin.'],function(){
        Route::get('login','LoginController@index')->name('login');
        // 后台登录处理
        Route::post('login', 'LoginController@login')->name('login');


//=================================================================

        // 中间件路由分组绑定’
        Route::group(['middleware' => ['CheckAdmin:aaa']],function(){
            //    后台首页
            Route::get('adminhome','AdminHomeController@adminhome')->name('home');
            //后台欢迎页
            // Route::get('adminwelcome','AdminHomeController@adminwelcome')->name('welcome')->middleware('CheckAdmin');
            Route::get('adminwelcome','AdminHomeController@adminwelcome')->name('welcome');

            // 后台退出页面
            Route::get('adminlogout','AdminHomeController@adminlogout')->name('logout');


            //========================================================================
            // 列表管理
            Route::get('adminlist','adminController@adminlist')->name('list');


            // 添加用户显示
            Route::get('adminlist/create','adminController@admincreate')->name('list.create');

            // 添加用户处理
            Route::post('adminlist/store','adminController@adminstore')->name('list.store');

            // 修改用户显示 修改一定要有参数 才能针对指定用户来修改
            Route::get('adminlist/edit/{id}','AdminController@adminedit')->name('list.edit');

            // 修改用户处理
            Route::put('adminlist/edit/{id}','AdminController@adminupdate')->name('list.update');

            // 删除用户
            Route::delete('adminlist/destroy/{id}','AdminController@admindestroy')->name('list.destroy');

            // 全选删除
            Route::delete('adminlist/delall','AdminController@admindelall')->name('list.delall');

            // 恢复用户
            Route::get('adminlist/restore','AdminController@adminrestore')->name('list.restore');

            //===================================================================================

            // 定义资源路由
            Route::resource('role','RoleController');

            //===================================================================================

            // 权限管理
            Route::resource('node','NodeController');
        });



    });




