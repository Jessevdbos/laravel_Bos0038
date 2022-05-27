<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title,
            'body' => $this->faker->paragraph,
            'image' => 'https://images0.persgroep.net/rcs/inNa6d_SRsUo0GRl9UwbMk5Z1Wc/diocontent/63534838/_crop/16/49/827/1154/_fitwidth/694/?appId=21791a8992982cd8da851550a453bd7f&quality=0.8'
        ];
    }
}
