<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\MFrontPage;

class MFrontPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MFrontPage::create([
            'name' => 'front.top.index',
            'title' => 'タイトル',
            'description' => '詳細',
            'ogp_type' => 'website',
            'is_index' => 1,
        ]);
    }
}
