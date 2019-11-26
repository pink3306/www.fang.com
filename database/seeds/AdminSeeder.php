<?php

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 调用factory 数据工厂 生成数据
        factory(Admin::class,10)->create();

//        // 清空数据 truncate
//        Admin::truncate();

        // 修改第6条用户名 为 admin
        Admin::where('id',6)->update(['username'=>'admin']);
    }
}
