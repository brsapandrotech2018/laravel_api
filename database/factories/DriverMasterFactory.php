<?php

namespace Database\Factories;

use App\Models\DriverMaster;
use Illuminate\Database\Eloquent\Factories\Factory;

class DriverMasterFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DriverMaster::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            // protected $fillable = ['driver_name','driver_email_id','driver_mobile_number1','driver_mobile_number2','driver_address','driver_pan_number','vehicle_state','location_id','is_active'];

            'driver_name' => $this->faker->text(10),
            

            'driver_email_id' => $this->faker->email,

            'driver_mobile_number1' => $this->faker->phoneNumber,

            'driver_mobile_number2' => $this->faker->phoneNumber,

            'driver_address' => $this->faker->text(20),

            'driver_pan_number' => $this->faker->swiftBicNumber,


            'vehicle_state' => $this->faker->text(20),
            'location_id' => $this->faker->numberBetween($min = 0, $max = 20),


            'is_active' => $this->faker->numberBetween($min = 0, $max = 1)
        ];
    }
}
