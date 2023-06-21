<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        (new Post())->create([
            'image' => 'images/2.jpg',
            'title' => 'Post 1',
            'description' => 'Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.'
        ]);
        (new Post())->create([
            'image' => 'images/3.jpg',
            'title' => 'Post 2',
            'description' => 'Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.'
        ]);
        (new Post())->create([
            'image' => 'images/4.jpg',
            'title' => 'Post 3',
            'description' => 'Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.'
        ]);
        (new Post())->create([
            'image' => 'images/5.jpg',
            'title' => 'Post 4',
            'description' => 'Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.'
        ]);
    }
}
