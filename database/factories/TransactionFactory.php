<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TransactionFactory extends Factory
{
    protected $model = Transaction::class;

    public function definition(): array
    {
        $event = Event::inRandomOrder()->first();
        
        return [
            'event_id' => $event?->id ?? 1,
            'order_id' => 'ORD-' . Str::upper(Str::random(8)),
            'customer_name' => $this->faker->name(),
            'customer_email' => $this->faker->safeEmail(),
            'customer_phone' => $this->faker->phoneNumber(),
            'total_price' => $this->faker->numberBetween(10000, 500000),
            'status' => $this->faker->randomElement(['Pending', 'Success', 'Failed']),
            'snap_token' => null,
        ];
    }
}