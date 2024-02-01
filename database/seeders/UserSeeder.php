<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name' => 'Shikky',
            'level' => 'admin',
            'nis' => '2958',
            'password' => bcrypt('Shiky1210'),
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'Indra Setiawan',
            'level' => 'siswa',
            'nis' => '2878',
            'password' => bcrypt('Indra12'),
            'remember_token' => Str::random(60),
        ]);
    }
}
