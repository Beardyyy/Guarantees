<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'user_id' => 1,
            'category_id' => 1,
            'title' => $this->faker->sentence(3),
            'slug' => $this->faker->slug(3),
            'excerpt' => $this->faker->paragraph(2),
            'body' => $this->faker->paragraph(10)
        ];
    }
}
