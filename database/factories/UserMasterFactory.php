<?php

namespace Database\Factories;

use App\Models\UserMaster;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserMasterFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserMaster::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'user_type_id' => $this->faker->numberBetween($min = 1, $max = 2),

            'user_display_name' => $this->faker->text(10),
            'user_name' => $this->faker->text(10),

            'contact_number' => $this->faker->randomNumber($nbDigits = NULL, $strict = false), // 79907610
            'email_id' => $this->faker->regexify('[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}') // sm0@y8k96a.ej
            
            
        ];

    }
}
