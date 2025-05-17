<?php

namespace Database\Factories;

use App\Models\Enums\ProductStatus;
use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{

    public function definition(): array
    {
        return [
            'project_id' => Project::factory(),
            'name' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'reference' => $this->faker->word(),
            'status' => $this->faker->randomElement(ProductStatus::values()),
            'price' => $this->faker->numerify('####'),
            'metadata' => [
                'key' => $this->faker->word(),
                'value' => $this->faker->word(),
            ],
        ];
    }
}
