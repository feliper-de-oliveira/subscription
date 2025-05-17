<?php

namespace Database\Factories;

use App\Models\Enums\ProjectCurrencyTypes;
use App\Models\Enums\ProjectStatus;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'name' => $this->faker->word(),
            'reference' => $this->faker->unique()->word(),
            'currency' => $this->faker->randomElement(ProjectCurrencyTypes::values()),
            'status' => $this->faker->randomElement(ProjectStatus::values()),
        ];
    }
}
