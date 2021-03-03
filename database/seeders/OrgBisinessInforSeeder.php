<?php

namespace Database\Seeders;

use App\Models\OrgBisinessInfor;
use Illuminate\Database\Seeder;

class OrgBisinessInforSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrgBisinessInfor::factory()->time(30)->create();
    }
}
