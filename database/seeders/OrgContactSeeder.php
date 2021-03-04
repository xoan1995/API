<?php

namespace Database\Seeders;

use App\Models\OrgContact;
use Illuminate\Database\Seeder;

class OrgContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrgContact::factory()->time(30)->create();
    }
}
