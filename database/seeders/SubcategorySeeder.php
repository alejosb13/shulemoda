<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $subcategories = [
            // Celulares y Tablets
            [
                "category_id" => 1,
                "name" => "Celulares y smartphones",
                "slug" =>  Str::slug("Celulares y smartphones"),
                "color" => TRUE
            ],
            [
                "category_id" => 1,
                "name" => "Accesorios para celulares",
                "slug" =>  Str::slug("Accesorios para celulares"),
            ],
            [
                "category_id" => 1,
                "name" => "Smartwatches",
                "slug" =>  Str::slug("Smartwatches"),
            ],

            // Tv y audio
            [
                "category_id" => 4,
                "name" => "Tv y audio",
                "slug" =>  Str::slug("Tv y audio"),
            ],
            [
                "category_id" => 4,
                "name" => "Audios",
                "slug" =>  Str::slug("Audios"),
            ],
            [
                "category_id" => 4,
                "name" => "Audios para autos",
                "slug" =>  Str::slug("Audios para autos"),
            ],

            // Consolas
            [
                "category_id" => 2,
                "name" => "Xbox",
                "slug" =>  Str::slug("Xbox"),
            ],
            [
                "category_id" => 2,
                "name" => "Playstation",
                "slug" =>  Str::slug("Playstation"),
            ],
            [
                "category_id" => 2,
                "name" => "Juegos para Pc",
                "slug" =>  Str::slug("Juegos para Pc"),
            ],
            [
                "category_id" => 2,
                "name" => "Nintendo",
                "slug" =>  Str::slug("Nintendo"),
            ],

            // Computación

            [
                "category_id" => 5,
                "name" => "Portatiles",
                "slug" =>  Str::slug("Portatiles"),
            ],
            [
                "category_id" => 5,
                "name" => "PC escritorio",
                "slug" =>  Str::slug("PC escritorio"),
            ],
            [
                "category_id" => 5,
                "name" => "Almacenamiento",
                "slug" =>  Str::slug("Almacenamiento"),
            ],
            [
                "category_id" => 5,
                "name" => "Accesorios computadoras",
                "slug" =>  Str::slug("PC escritorio"),
                "color" => true,
                "size" => true
            ],

            // Moda
            [
                "category_id" => 3,
                "name" => "Mujeres",
                "slug" =>  Str::slug("Mujeres"),
                "color" => true,
                "size" => true
            ],
            [
                "category_id" => 3,
                "name" => "Hombre",
                "slug" =>  Str::slug("Hombre"),
                "color" => true,
                "size" => true
            ],
            [
                "category_id" => 3,
                "name" => "Relojes",
                "slug" =>  Str::slug("Relojes"),
            ],
            [
                "category_id" => 3,
                "name" => "Lentes",
                "slug" =>  Str::slug("Lentes"),
            ],
        ];

        foreach ($subcategories as $subcategory) {
            Subcategory::factory(1)->create($subcategory);
        }

    }
}
