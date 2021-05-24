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
        Storage::deleteDirectory("products"); // elimino directorio para imagenes de categoria llamado products
        Storage::makeDirectory("products"); // creo directorio para imagenes de categoria llamado products

        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);

    }
}