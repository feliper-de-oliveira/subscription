<?php

namespace Database\Factories;

use App\Models\Enums\ProductAddonStatus;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductAddonFactory extends Factory
{
    public function definition(): array
    {
        return [
            'product_id' => Product::factory(),
            'name' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'reference' => $this->faker->word(),
            'status' => $this->faker->randomElement(ProductAddonStatus::values()),
            'price' => $this->faker->numerify('####'),
            'medatata' => [
                'key' => $this->faker->word(),
                'value' => $this->faker->word(),
            ],
        ];
    }
}
