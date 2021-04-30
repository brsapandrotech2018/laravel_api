<?php

namespace Database\Factories;

use App\Models\Warehouse;
use Illuminate\Database\Eloquent\Factories\Factory;

class WarehouseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Warehouse::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //protected $fillable = ['warehouse_name','warehouse_detalls','location_id','is_active'];

            'warehouse_name' => $this->faker->text(10),
            'warehouse_detalls' => $this->faker->text(20),

            'location_id' => $this->faker->numberBetween($min = 1, $max = 20),

            'is_active' => $this->faker->numberBetween($min = 0, $max = 1)
        ];
    }
}
