<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Contracts\Cache\Store;
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
        //User::factory(10)->create();
        Storage::deleteDirectory('cursos'); //Eliminamos primero para que no se acumulen las imagenes
        Storage::makeDirectory('cursos'); //Crea la carpeta en el storage

        $this->call(UserSeeder::class);
        $this->call(LevelSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(PriceSeeder::class);
        $this->call(PlatformSeeder::class);
        $this->call(CourseSedeer::class);
    }
}
