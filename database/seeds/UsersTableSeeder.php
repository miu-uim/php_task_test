<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *　データベースの初期値設定の実行
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [
                'name' => 'あああ',
                'email' => 'test@test.com',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'いいい',
                'email' => 'test2@test.com',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'ううう',
                'email' => 'test3@test.com',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'ええええ',
                'email' => 'test4@test.com',
                'password' => Hash::make('password123'),
            ],
        ]);
    }
}
