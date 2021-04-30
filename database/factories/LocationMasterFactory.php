<?php

namespace Database\Factories;

use App\Models\LocationMaster;
use Illuminate\Database\Eloquent\Factories\Factory;

class LocationMasterFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LocationMaster::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            
            'location_name' => $this->faker->text(10),
            'location_details' => $this->faker->text(10),

            'state_id' => $this->faker->numberBetween($min = 1, $max = 10),
            'country_id' => $this->faker->numberBetween($min = 1, $max = 2),

            'is_active' => $this->faker->numberBetween($min = 0, $max = 1)
            
        ];
    }
}
