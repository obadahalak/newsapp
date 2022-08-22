<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PostCompatition>
 */
class PostCompatitionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id'=>3,
            'competition_id'=>9,
            'body'=>fake()->realText(50),
            'video'=>'post_compatitions/vidoe.mp4',
        ];
    }
}
