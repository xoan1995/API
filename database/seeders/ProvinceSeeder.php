<?php

namespace Database\Seeders;

use App\Models\Province;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Province::factory()->times(30)->create();
    }
}
