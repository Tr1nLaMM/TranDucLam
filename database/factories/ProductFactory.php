<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
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
            'tenhang'=>$this->faker->name(),
            'donvitinh'=>$this->faker->name(),
            'slnhap' => $this->faker->randomNumber(),
            'gianhap' => $this->faker->randomNumber(),
            'giaban' => $this->faker->randomNumber(),
            'category_id' => Category::min('madanhmuc')
        ];
    }
}
