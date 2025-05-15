<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Product;
use App\Models\ProductAddon;
use App\Models\Project;
use App\Models\Subscription;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {

        $user = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $project = Project::factory()->create();

        $project->users()->attach($user);

        $product = Product::factory()
            ->for($project)
            ->create();

        $customer = Customer::factory()
            ->for($project)
            ->create();

        ProductAddon::factory(3)
            ->for($product)
            ->create();

        Subscription::factory()
            ->for($project)
            ->for($product)
            ->for($customer)
            ->create();
    }
}
