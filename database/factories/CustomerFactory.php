<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
         return [
            'name'=>fake()->name(),
            'email'=>fake()->email(),
            'mobile'=>fake()->numberBetween(0,100),
            'password'=>fake()->password(),
            'address'=>fake()->address(),
            'city'=>fake()->city(),
            'state'=>fake()->city(),
            'zip'=>rand(0,9),
            'company'=>fake()->company(),
            'gstin'=>rand(0,99),
            'status'=>rand(0,1),
        ];
    }
}