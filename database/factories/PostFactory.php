<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'body' => $this->faker->text(200),
            'category_id' => $this->faker->numberBetween(1, DB::table('categories')->count()),
            'user_id' => User::all()->random(),
            'large_image' => $this->faker->imageUrl,
            'small_image' => $this->faker->imageUrl,
            'views' => $this->faker->randomNumber(2),
            'shares' => $this->faker->randomNumber(2),
        ];
    }
}
