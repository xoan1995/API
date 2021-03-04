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
       \App\Models\OrgBisinessInfor::factory(20)->create();
       \App\Models\OrgBasicInfor::factory(20)->create();
       \App\Models\OrgDetail::factory(20)->create();
       \App\Models\OrgMajors::factory(20)->create();
       \App\Models\OrgMedia::factory(20)->create();
       \App\Models\OrgNews::factory(20)->create();
       \App\Models\OrgContact::factory(20)->create();
       \App\Models\InforMajorsNewsMedia::factory(20)->create();
    }
}
