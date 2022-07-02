<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MPage;

class MPageSeeder extends Seeder
{
    private array $pages = [
        ['parent_id' => null, 'name' => 'front.top.index', 'title' => 'タイトル', 'description' => '詳細', 'ogp_type' => 'website', 'ogp_image' => 'OGP.JPG', 'is_index' => 1],
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->pages as $page) {
            MPage::create($page);
        }
    }
}
