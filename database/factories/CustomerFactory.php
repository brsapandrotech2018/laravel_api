<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'customer_id' => $this->faker->numberBetween($min = 1, $max = 5),
            'mobile_number' => $this->faker->randomNumber($nbDigits = NULL, $strict = false), // 79907610
            'first_name' => $this->faker->text(10),
            'last_name' => $this->faker->text(10),
            'user_type_id' => $this->faker->numberBetween($min = 1, $max = 2),
            'email_id' => $this->faker->regexify('[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}') // sm0@y8k96a.ej
            
            // 'description' => $this->faker->text(100)
        ];

        // protected $fillable = ['mobile_number','first_name','last_name','email_id'];
    }
}
