<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
          'headline' => fake()->sentence(),
          'subheadline' => fake()->sentence(),
          'body' => fake()->paragraph(),  
          'is_published' => fake()->boolean(),
          'user_id' => User::factory(),       
           ];
    }
}
