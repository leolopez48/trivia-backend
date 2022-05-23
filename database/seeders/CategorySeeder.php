<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            [
                'category_name' => 'Geography',
                'url_img' => 'Geography.png',  
                
            ],
            [
                'category_name' => 'Math',
                'url_img' => 'Math.png', 
            ],
            [
                'category_name' => 'History',
                'url_img' => 'History.png', 
            ],
            [
                'category_name' => 'Science',
                'url_img' => 'Science.png',
            ],
            [
                'category_name' => 'Sports',
                'url_img' => 'Sports.png',
            ],
            [
                'category_name' => 'Technology',
                'url_img' => 'Technology.png',
            ],
            [
                'category_name' => 'Entertainment',
                'url_img' => 'Entertainment.png',
            ],
            [
                'category_name' => 'Music',
                'url_img' => 'Music.png',
            ],
            [
                'category_name' => 'Videogames',
                'url_img' => 'Videogames.png',
            ],
        ]);
    }
}
