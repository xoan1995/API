<?php

namespace Database\Factories;

use App\Models\OrgNews;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrgNewsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrgNews::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code' => $this->faker->numberBetween(10000, 99999),
            'name' => $this->faker->city(),
            'name_slug' => $this->faker->firstName(),
            'is_active' => $this->faker->numberBetween(1, 10),
        ];
    }
}
