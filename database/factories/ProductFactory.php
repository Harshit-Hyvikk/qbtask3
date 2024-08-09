<?php

namespace Database\Factories;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'slug' => $this->faker->unique()->slug(),
            'category' => $this->faker->randomElement(['Fashion', 'Clothes', 'Books', 'Electronics', 'Kitchen']),
            'description' => $this->faker->text(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => Hash::make('password'),
            'price' => $this->faker->randomFloat(2, 100, 1000),
            'city' => $this->faker->city(),
        ];
    }
}
