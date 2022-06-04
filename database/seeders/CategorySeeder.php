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
                "category_name" => "Geografía",
                "url_img" => "Geography.png",
            ],
            [
                "category_name" => "Matemáticas",
                "url_img" => "Math.png",
            ],
            [
                "category_name" => "Historia",
                "url_img" => "History.png",
            ],
            [
                "category_name" => "Ciencias",
                "url_img" => "Science.png",
            ],
            [
                "category_name" => "Deportes",
                "url_img" => "Sports.png",
            ],
            [
                "category_name" => "Tecnología",
                "url_img" => "Technology.png",
            ],
            [
                "category_name" => "Entretenimiento",
                "url_img" => "Entertainment.png",
            ],
            [
                "category_name" => "Música",
                "url_img" => "Music.png",
            ],
            [
                "category_name" => "Videojuegos",
                "url_img" => "Videogames.png",
            ],

        ]);
    }
}
