<?php

namespace Database\Factories;

use App\Models\District;
use Illuminate\Database\Eloquent\Factories\Factory;

class DistrictFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = District::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code' => $this->faker->numberBetween(10000,99999),
            'name' => $this->faker->city(),
            'name_short'=> $this->faker->state(),
            'name_slug' => $this->faker->stateAbbr(),
            'province_code'=> $this->faker->numberBetween(10000,99999),
            'is_active'=> $this->faker->numberBetween(1,10),
        ];
    }
}
