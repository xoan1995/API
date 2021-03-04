<?php

namespace Database\Seeders;

use App\Models\OrgNews;
use Illuminate\Database\Seeder;

class OrgNewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrgNews::factory()->time(30)->create();
    }
}
