<?php

namespace Database\Factories;

use App\Models\rule;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class RuleuserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->random(),
            'rule_id' => rule::all()->random(),
        ];
    }
}
