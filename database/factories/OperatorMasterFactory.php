<?php

namespace Database\Factories;

use App\Models\OperatorMaster;
use Illuminate\Database\Eloquent\Factories\Factory;

class OperatorMasterFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OperatorMaster::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //protected $fillable = ['operator_name','operator_address','location_id','is_active'];

            'operator_name' => $this->faker->text(10),
            'operator_address' => $this->faker->text(20),

            'location_id' => $this->faker->numberBetween($min = 1, $max = 20),

            'is_active' => $this->faker->numberBetween($min = 0, $max = 1)
        ];
    }
}
