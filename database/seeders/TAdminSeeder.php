<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

use App\Models\TAdmin;

class TAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() : void
    {
        $faker = Faker::create('ja_JP');

        for ($i = 0; $i < 4; ++$i) {
            TAdmin::create([
                'name'  => $faker->name(),
                'password' => Hash::make('123456'),
            ]);
        }
    }
}
