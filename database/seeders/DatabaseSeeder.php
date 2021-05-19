<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Project;
use App\Models\Role;
use App\Models\Service;
use App\Models\Testmonial;
use App\Models\User;
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
        Role::factory(5)->create();
        User::factory(10)->create();
        // Testmonial::factory(5)->create();
        // Project::factory(10)->has(Image::factory(rand(2, 4)))->create();
        // Service::factory(10)->create();

    }
}
