<?php

namespace Database\Factories;

use App\Models\OrgBisinessInfor;
use App\Models\OrgContact;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrgContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrgContact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'contact'=>$this->faker->text(),
            'phone_1'=>$this->faker->e164PhoneNumber,
            'phone_2'=>$this->faker->e164PhoneNumber,
            'email'=>$this->faker->email,
            'address'=>$this->faker->macAddress,
            'status'=>$this->faker->text(),
            'org_bisiness_infor_id'=>OrgBisinessInfor::all()->random()->id
        ];
    }
}
