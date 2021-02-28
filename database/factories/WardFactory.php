<?php

namespace Database\Factories;

use App\Models\Ward;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Provider\Address;
class WardFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ward::class;

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
            'district_code'=> $this->faker->numberBetween(10000,99999),
            'province_code'=> $this->faker->numberBetween(10000,99999),
        ];
    }
}
