<?php

namespace Database\Seeders;

use App\Models\OrgBasicInfor;
use Illuminate\Database\Seeder;

class OrgBasicInforSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrgBasicInfor::factory()->times(30)->create();
    }
}
