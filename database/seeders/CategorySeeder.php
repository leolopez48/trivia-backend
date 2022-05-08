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
            ],
            // [
            //     'category_name' => 'History',
            // ],
            // [
            //     'category_name' => 'Science',
            // ],
            // [
            //     'category_name' => 'Sports',
            // ],
            // [
            //     'category_name' => 'Technology',
            // ],
            // [
            //     'category_name' => 'Entertainment',
            // ],
            // [
            //     'category_name' => 'Music',
            // ],
            // [
            //     'category_name' => 'Movies',
            // ],
        ]);
    }
}
