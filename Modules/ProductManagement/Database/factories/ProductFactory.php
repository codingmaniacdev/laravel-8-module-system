<?php
namespace Modules\ProductManagement\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\ProductManagement\Entities\Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'image' => $this->faker->imageUrl(),
            'slug' => $this->faker->slug,
            'actual_price' => $this->faker->randomFloat(2, 10, 100),
            'sell_original' => $this->faker->randomFloat(2, 10, 100),
            'description' => $this->faker->paragraph,
        ];
    }
}

