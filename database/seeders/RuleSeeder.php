<?php

namespace Database\Seeders;

use App\Models\rule;
use Illuminate\Database\Seeder;

class RuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        rule::factory()->count(100)->create();
    }
}
