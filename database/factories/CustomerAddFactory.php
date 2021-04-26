<?php

namespace Database\Factories;

use App\Models\CustomerAdd;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerAddFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CustomerAdd::class;

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
            'address_type_id' => $this->faker->numberBetween($min = 1, $max = 3),
            'country' => $this->faker->text(6),
            'state' => $this->faker->text(15),
            'city' => $this->faker->text(15),
            'locality' => $this->faker->text(15),
            'street' => $this->faker->text(15)
            
        ];
    }
}
