<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        (new User())->create([
            'name' => 'User One',
            'email' => 'userone@gmail.com',
            'password' => Hash::make('password')
        ]);
        (new User())->create([
            'name' => 'User Two',
            'email' => 'usertwo@gmail.com',
            'password' => Hash::make('password')
        ]);
    }
}
