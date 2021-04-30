<?php

namespace Database\Factories;

use App\Models\PickupRequest;
use Illuminate\Database\Eloquent\Factories\Factory;

class PickupRequestFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PickupRequest::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //protected $fillable = ['customer_id','pickup_address','location_id','pickup_status','pickup_request_attendedBy'];

            'customer_id' => $this->faker->numberBetween($min = 1, $max = 15),
            'pickup_address' => $this->faker->text(30),

            'location_id' => $this->faker->numberBetween($min = 1, $max = 20),

            'pickup_status' => $this->faker->numberBetween($min = 0, $max = 9),

            'pickup_request_attendedBy' => $this->faker->text(20),
            
        ];
    }
}
