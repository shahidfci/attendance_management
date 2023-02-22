<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /*
     * Define the model's default state.
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'reg_no' => rand(10000000,99999900),
            'roll_no' => rand(100000,999999),
            'email' => fake()->unique()->safeEmail(),
            'password' =>'password',
            'mobile' => fake()->phoneNumber(),
            'gender' => 1,
            'birth_date' => fake()->dateTime(),
            'nid' => rand(10000000001755100,20000000017244200),
            'address' => fake()->address(),
            'is_active' => 1,
        ];
    }
}
