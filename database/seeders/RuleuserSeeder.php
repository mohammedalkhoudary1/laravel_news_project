<?php

namespace Database\Seeders;

use App\Models\ruleuser;
use Illuminate\Database\Seeder;

class RuleuserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ruleuser::factory()->count(100)->create();
    }
}
