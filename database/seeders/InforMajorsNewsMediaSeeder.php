<?php

namespace Database\Seeders;

use App\Models\InforMajorsNewsMedia;
use Illuminate\Database\Seeder;

class InforMajorsNewsMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        InforMajorsNewsMedia::factory()->times(30)->create();
    }
}
