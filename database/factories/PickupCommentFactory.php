<?php

namespace Database\Factories;

use App\Models\PickupComment;
use Illuminate\Database\Eloquent\Factories\Factory;

class PickupCommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PickupComment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //['comment','public_viewable','created_by'];
            'comment' => $this->faker->text(30),
            'public_viewable' => $this->faker->numberBetween($min = 0, $max = 1),

            'created_by' => $this->faker->text(30)
        ];
    }
}
