<?php

namespace Database\Factories;

use App\Models\District;
use App\Models\OrgBasicInfor;
use App\Models\OrgBisinessInfor;
use App\Models\Province;
use Illuminate\Database\Eloquent\Factories\Factory;


class OrgBasicInforFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrgBasicInfor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // return [
        //     'name' => $this->faker->company,
        //     'name_en' => $this->faker->company,
        //     'code_tax)' => $this->faker->postcode,
        //     'province_id' => Province::all()->random()->id,
        //     'district_id' => District::all()->random()->id,
        //     'ward_id' => rand(1, 20),
        //     'representative' => $this->faker->text,
        //     'phone' => $this->faker->e164PhoneNumber,
        //     'email' => $this->faker->email,
        //     'civil_scale' => $this->faker->numberBetween(1, 1000),
        //     'founding' => $this->faker->name,
        //     'org_created' => $this->faker->dateTime(),
        //     'status' => $this->faker->name,
        //     'org_bisiness_infor_id' => OrgBisinessInfor::all()->id
        // ];
    }
}
