<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

use App\Models\TUser;

class TUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() : void
    {
        $faker = Faker::create('ja_JP');

        for ($i = 0; $i < 100; ++$i) {
            TUser::create([
                'name'  => $faker->name(),
                'email' => $faker->safeEmail,
                'password' => Hash::make('123456'),
            ]);
        }
    }
}
