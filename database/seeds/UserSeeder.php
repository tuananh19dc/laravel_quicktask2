<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name' => 'Nguyễn Ngọc',
            'last_name' => 'Thùy Minh',
            'username' => 'MinhNg',
            'email' => 'MinhNg@gmail.com',
            'password' => Hash::make('A12345678'),
            'isAdmin' => 1,
        ]);
    }
}
