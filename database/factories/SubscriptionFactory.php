<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Enums\SubscriptionStatus;
use App\Models\Product;
use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubscriptionFactory extends Factory
{
    public function definition(): array
    {
        return [
            'project_id' => Project::factory(),
            'customer_id' => Customer::factory(),
            'product_id' => Product::factory(),
            'status' => $this->faker->randomElement(SubscriptionStatus::values()),
            'trial_ends_at' => $this->faker->optional()->dateTime(),
            'grace_ends_at' => $this->faker->optional()->dateTime(),
            'starts_at' => $this->faker->optional()->dateTime(),
            'ends_at' => $this->faker->optional()->dateTime(),
        ];
    }
}
