<?php

namespace Database\Seeders;

use App\Models\OrgDetail;
use Illuminate\Database\Seeder;

class OrgDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrgDetail::factory()->time(30)->create();
    }
}
