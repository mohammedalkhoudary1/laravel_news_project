<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhoneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $phones = ['iphone', 'samsung', 'oppo', 'Nokia', 'xaomi'];
        $key = array_rand($phones);
        
        return [
            'name' => $phones[$key],
            'user_id' => User::all()->unique()->random(),
            // 'user_id' => $this->faker->unique()->numberBetween(1, User::count()),
        ];
    }
}
