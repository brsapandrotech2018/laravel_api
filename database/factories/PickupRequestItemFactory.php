<?php

namespace Database\Factories;

use App\Models\PickupRequestItem;
use Illuminate\Database\Eloquent\Factories\Factory;

class PickupRequestItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PickupRequestItem::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //['pickup_request_id','item_id','quantity','price','total_price','is_active'];
            'pickup_request_id' => $this->faker->numberBetween($min = 1, $max = 10),
            'item_id' => $this->faker->numberBetween($min = 1, $max = 10),

            'quantity' => $this->faker->randomFloat($nbMaxDecimals = NULL, $min = 1, $max = 100),
            'price' => $this->faker->randomFloat($nbMaxDecimals = NULL, $min = 1, $max = 1000),
            'total_price' => $this->faker->randomFloat($nbMaxDecimals = NULL, $min = 1, $max = 1000),

            'is_active' => $this->faker->numberBetween($min = 0, $max = 1)

        ];
    }
}
