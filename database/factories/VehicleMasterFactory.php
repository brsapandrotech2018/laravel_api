<?php

namespace Database\Factories;

use App\Models\VehicleMaster;
use Illuminate\Database\Eloquent\Factories\Factory;

class VehicleMasterFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = VehicleMaster::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //

            'owner_name' => $this->faker->text(10),
            'owner_address' => $this->faker->text(20),

            'owner_email_id' => $this->faker->regexify('[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}'), // sm0@y8k96a.ej

            'owner_mobile_number' => $this->faker->randomNumber($nbDigits = NULL, $strict = false), // 79907610

            'vehicle_number' => $this->faker->randomNumber($nbDigits = NULL, $strict = false), // 79907610

            'vehicle_plate_no' => $this->faker->randomNumber($nbDigits = NULL, $strict = false), // 79907610

            'vehicle_state' => $this->faker->text(20),
            'location_id' => $this->faker->numberBetween($min = 0, $max = 20),

            'chassis_number' => $this->faker->numberBetween($min = 255334, $max = 322333),

            'vehicle_color' => $this->faker->text(20),
            'vehicle_make' => $this->faker->text(20),
            'vehicle_model' => $this->faker->text(20),

            'vehicle_year' => $this->faker->numberBetween($min = 2010, $max = 2021),

            'is_active' => $this->faker->numberBetween($min = 0, $max = 1)

        ];
    }
}
