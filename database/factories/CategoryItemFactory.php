<?php

namespace Database\Factories;

use App\Models\CategoryItem;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CategoryItem::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'category_id' => $this->faker->numberBetween($min = 1, $max = 5),
            'unit_id' => $this->faker->numberBetween($min = 1, $max = 2),
            'item_name' => $this->faker->text(10),
            'unit_price' => $this->faker->randomFloat($nbMaxDecimals = NULL, $min = 1, $max = 15),
            'description' => $this->faker->text(100)
        ];
    }
}
