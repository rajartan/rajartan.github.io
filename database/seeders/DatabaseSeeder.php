<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Tutorial;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Tutorial::factory(20)->create();
        Category::create([
            "name" => "HTML",
            "slug" => "html"
        ]);
        Category::create([
            "name" => "PHP",
            "slug" => "php"
        ]);
        Category::create([
            "name" => "Laravel",
            "slug" => "laravel"
        ]);
    }
}
