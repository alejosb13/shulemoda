<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                "name" => "Celulares y Tablets",
                "slug" => Str::slug("Celulares y Tablets"),
                "icon" => '<i class="fas fa-mobile-alt"></i>',
            ],
            [
                "name" => "Consolas",
                "slug" => Str::slug("Consolas"),
                "icon" => '<i class="fas fa-gamepad"></i>',
            ],
            [
                "name" => "Moda",
                "slug" => Str::slug("Moda"),
                "icon" => '<i class="fas fa-shopping-bag"></i>',
            ],
            [
                "name" => "Tv y audio",
                "slug" => Str::slug("Tv y audio"),
                "icon" => '<i class="fas fa-tv"></i>',
            ],
            [
                "name" => "Computación",
                "slug" => Str::slug("Computación"),
                "icon" => '<i class="fas fa-laptop"></i>',
            ],
        ];

        foreach ($categories as $category) {
            Category::factory(1)->create($category);
        }
    }
}
