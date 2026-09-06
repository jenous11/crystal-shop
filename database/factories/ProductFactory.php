<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
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
            'name'=>fake()->word(),
            'description'=>$this->faker->paragraph(),
            'price'=>$this->faker->randomFloat(2,1,1500),
            'category_id'=>Category::factory(),
            'is_featured'=>$this->faker->boolean(20),
            'is_stock'=>$this->faker->boolean(80),

        ];
    }
}
