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
            'email' => 'shikkyy2331@gmail.com',
            'password' => bcrypt('Shiky1210'),
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'Indra Setiawan',
            'level' => 'siswa',
            'email' => 'indraa@gmail.com',
            'password' => bcrypt('Indra12'),
            'remember_token' => Str::random(60),
        ]);
    }
}
