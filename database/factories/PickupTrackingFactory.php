<?php

namespace Database\Factories;

use App\Models\PickupTracking;
use Illuminate\Database\Eloquent\Factories\Factory;

class PickupTrackingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PickupTracking::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // ['pickup_request_id','status_id','driver_id','vehicle_id','location_id','is_accepted'];

            'pickup_request_id' => $this->faker->numberBetween($min = 1, $max = 10),
            'status_id' => $this->faker->numberBetween($min = 1, $max = 20),
            'driver_id' => $this->faker->numberBetween($min = 1, $max = 20),
            'vehicle_id' => $this->faker->numberBetween($min = 1, $max = 20),
            'location_id' => $this->faker->numberBetween($min = 1, $max = 20),
            
            'is_accepted' => $this->faker->numberBetween($min = 0, $max = 1)
        ];
    }
}
