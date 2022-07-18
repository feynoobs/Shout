<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MPage;

class MPageSeeder extends Seeder
{
    private array $pages = [
        ['parent_id' => null, 'name' => 'front.top.index',    'title' => 'タイトル',      'description' => '詳細', 'ogp_type' => 'website', 'is_index' => 1],
        ['parent_id' => null, 'name' => 'admin.top.index',    'title' => 'タイトル',       'description' => null,   'ogp_type' => null,     'is_index' => 0],
        ['parent_id' => null, 'name' => 'admin.top.dashbord', 'title' => 'ダッシュボード', 'description' => null,   'ogp_type' => null,     'is_index' => 0],
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() : void
    {
        foreach ($this->pages as $page) {
            MPage::create($page);
        }
    }
}
