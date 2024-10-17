<?php

namespace Database\Factories;

use App\Enums\ProjectStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_name' => fake()->name(),
            'client_name' => fake()->name(),
            'team_leader_name' => fake()->name(),
            'employee_name' => fake()->name(),
            'estimated_time' => fake()->randomDigitNotNull(),
            'spent_time' => fake()->randomDigitNotNull(),
            'status' => fake()->randomElement(ProjectStatus::class),
            'contract_start_date' => fake()->date(),
            'contract_end_date' => fake()->date(),
        ];
    }
}
