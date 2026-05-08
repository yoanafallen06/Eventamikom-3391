<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    protected $model = Event::class;

    public function definition(): array
    {
        $category = Category::inRandomOrder()->first();
        
        return [
            'category_id' => $category?->id ?? 1,
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(),
            'date' => $this->faker->dateTimeBetween('now', '+6 months'),
            'location' => $this->faker->city(),
            'price' => $this->faker->numberBetween(10000, 500000),
            'stock' => $this->faker->numberBetween(10, 500),
            'poster_path' => null,
        ];
    }
}