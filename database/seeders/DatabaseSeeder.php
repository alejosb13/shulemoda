<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Storage::deleteDirectory("categories"); // elimino directorio para imagenes de categoria llamado products
        Storage::makeDirectory("categories"); // creo directorio para imagenes de categoria llamado products

        Storage::deleteDirectory("subcategories"); // elimino directorio para imagenes de subcategories llamado products
        Storage::makeDirectory("subcategories"); // creo directorio para imagenes de subcategories llamado products

        Storage::deleteDirectory("products"); // elimino directorio para imagenes de products llamado products
        Storage::makeDirectory("products"); // creo directorio para imagenes de products llamado products

        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(SubcategorySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ColorSeeder::class);
        $this->call(ColorProductSeeder::class);
        $this->call(SizeSeeder::class);

    }
}
