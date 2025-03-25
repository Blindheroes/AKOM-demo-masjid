<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UpcomingEvent>
 */
class UpcomingEventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // protected $fillable = [
            //     'id_event',
            //     'date',
            //     'title',
            //     'content',
            //     'image',
            //     'slug',
            // ];

            'date' => $this->faker->dateTimeBetween('now', '+1 year'),
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraph,
            'image' => $this->faker->imageUrl(),

        ];
    }
}
