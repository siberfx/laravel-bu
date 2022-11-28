<?php

namespace Database\Factories;

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
    public function definition()
    {
        return [
            'name' => $this->faker->text(),
            'description' => $this->faker->text(),
            'sku' => $this->faker->text(),
            'category' => $this->faker->text(),
            'sub_categories' => $this->faker->text(),
            'brand' => $this->faker->text(),
            'stock_amount' => $this->faker->text(),
            'stock_type' => $this->faker->text(),
            'net_quantity' => $this->faker->text(),
            'quantity_type' => $this->faker->text(),
            'image' => $this->faker->imageUrl(640, 480),
        ];
    }
}
