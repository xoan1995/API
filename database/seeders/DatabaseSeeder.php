<?php

namespace Database\Seeders;

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
       // \App\Models\Province::factory(10)->create();
       \App\Models\Province::factory(20)->create();
       \App\Models\District::factory(20)->create();
       \App\Models\Ward::factory(20)->create();
    }
}
