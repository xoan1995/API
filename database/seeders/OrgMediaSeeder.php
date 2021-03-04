<?php

namespace Database\Seeders;

use App\Models\OrgMedia;
use Illuminate\Database\Seeder;

class OrgMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrgMedia::factory()->time(30)->create();
    }
}
