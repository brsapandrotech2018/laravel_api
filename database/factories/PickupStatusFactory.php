<?php

namespace Database\Factories;

use App\Models\PickupStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

class PickupStatusFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PickupStatus::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'status_name' => $this->faker->text(10),
            'description' => $this->faker->text(20),

            'is_active' => $this->faker->numberBetween($min = 0, $max = 1)
        ];
    }
}
