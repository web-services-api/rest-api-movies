<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
    */
    public function run(): void
    {   
        $this->call(RoleSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(MediaTypeSeeder::class);
        $this->call(MovieSeeder::class);
    }
}
