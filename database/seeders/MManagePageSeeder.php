<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\MManagePage;


class MManagePageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MManagePage::create([
            'name' => 'admin.top.index',
            'title' => 'ログイン',
            'is_sidemenu' => 0,
            'group' => 1,
        ]);
        MManagePage::create([
            'name' => 'admin.top.dashbord',
            'title' => 'ダッシュボード',
            'is_sidemenu' => 0,
            'group' => 1,
        ]);
        MManagePage::create([
            'name' => 'admin.buz.index',
            'title' => 'バズ index',
            'is_sidemenu' => 1,
            'group' => 1,
        ]);
        MManagePage::create([
            'name' => 'admin.buz.edit',
            'title' => 'バズ edit',
            'is_sidemenu' => 1,
            'group' => 1,
            'parent_id' => 3,
        ]);
    }
}
