<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => \App\Models\User::factory(), // Assuming you're using the User model
            'order_number' => strtoupper(Str::random(10)), // Generates a random, unique order number
            'product_name' => $this->faker->word(),
            'product_category' => $this->faker->word(),
            'status' => $this->faker->randomElement(['pending', 'processing', 'completed', 'canceled']),
            'total_amount' => $this->faker->randomFloat(2, 20, 500), // Generates a random amount between 20 and 500
            'shipping_address' => $this->faker->address(),
            'billing_address' => $this->faker->address(),
            'city' => $this->faker->city(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
