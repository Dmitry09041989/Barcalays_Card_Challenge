<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $productSuffixes = ['Hair', 'Aftershave', 'Cream', 'Towel', 'Hair-gel', 'Shampoo', 'Haircare', 'Balm', 'Wax', 'Razors'];
        $name = 'Shear-locks Combs' . $this->faker->company . ' ' . Arr::random($productSuffixes);

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => $this->faker->realText(100),
            'price' => $this->faker->numberBetween(1, 100),
        ];
    }
}
