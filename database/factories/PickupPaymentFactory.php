<?php

namespace Database\Factories;

use App\Models\PickupPayment;
use Illuminate\Database\Eloquent\Factories\Factory;

class PickupPaymentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PickupPayment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //['pickup_request_id','customer_id','payment_mode','payment_type','amount','cgst','sgst','discount','total','transaction_id','channel_transaction_initiated'];

            'pickup_request_id' => $this->faker->numberBetween($min = 1, $max = 10),
            'customer_id' => $this->faker->numberBetween($min = 1, $max = 10),

            'payment_mode' => $this->faker->numberBetween($min = 1, $max = 10),

            'payment_type' => $this->faker->numberBetween($min = 1, $max = 10),

            'amount' => $this->faker->numberBetween($min = 1, $max = 20), 

            'cgst' => $this->faker->numberBetween($min = 1, $max = 15),

            'sgst' => $this->faker->numberBetween($min = 1, $max = 10), 

            'discount' => $this->faker->numberBetween($min = 10, $max = 90),

            'total' => $this->faker->numberBetween($min = 1, $max = 100), 

            'transaction_id' => $this->faker->text(30),     

            'channel_transaction_initiated' => $this->faker->text(30),

        ];
    }
}
