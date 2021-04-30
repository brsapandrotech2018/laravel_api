<?php

namespace Database\Factories;

use App\Models\PickupVehicleDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

class PickupVehicleDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PickupVehicleDetail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'pickup_request_id' => $this->faker->numberBetween($min = 1, $max = 10),
            'vehicle_id' => $this->faker->numberBetween($min = 1, $max = 10),

            'is_active' => $this->faker->numberBetween($min = 0, $max = 1)
        ];
    }
}
