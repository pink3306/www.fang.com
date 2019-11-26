<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\SoftDeletes;

class Admin extends Authenticatable
{
    // 继承 teait
    use SoftDeletes;

    // 指定软删除字段 delete_at 数据表中的字段
    protected $dates = ['deleted_at'];

    //黑名单
    protected $guarded=[];

    // 修改器
    // set字段名(首字母大写)Attribute
    public function setPasswordAttribute($value){
        // 给密码字段加密
        $this->attributes['password']=bcrypt($value);
    }
}
