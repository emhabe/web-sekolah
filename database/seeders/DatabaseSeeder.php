<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;
class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'admin',
                'password' => bcrypt('admin'),
                'level' => 'admin',
                'remember_token' => Str::random(60),
            ],
            [
                'name' => 'humas',
                'password' => bcrypt('humas'),
                'level' => 'humas',
                'remember_token' => Str::random(60),
            ],
            [
                'name' => 'bkk',
                'password' => bcrypt('bkk'),
                'level' => 'bkk',
                'remember_token' => Str::random(60),
            ],
            [
                'name' => 'kesiswaan',
                'password' => bcrypt('kesiswaan'),
                'level' => 'kesiswaan',
                'remember_token' => Str::random(60),
            ],
            [
                'name' => 'sapras',
                'password' => bcrypt('sapras'),
                'level' => 'sapras',
                'remember_token' => Str::random(60),
            ],
            [
                'name' => 'kurikulum',
                'password' => bcrypt('kurikulum'),
                'level' => 'kurikulum',
                'remember_token' => Str::random(60),
            ],
        ];
        User::insert($data);
}
}