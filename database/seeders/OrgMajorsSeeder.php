<?php

namespace Database\Seeders;

use App\Models\OrgMajors;
use Illuminate\Database\Seeder;

class OrgMajorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrgMajors::factory()->time(30)->create();
    }
}
