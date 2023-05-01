<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $agents=\App\Models\User::where('role','agent')->pluck('id')->toArray();
        return [
            'agent_id'=>fake()->randomElement($agents),
            'first_name' => fake()->firstName(),
            'middle_name' => fake()->username(),
            'last_name' => fake()->lastName(),
            'nick_name' => fake()->username(),
            'email' => fake()->unique()->safeEmail(),
            'phone' => fake()->phoneNumber(),
            'telephone' => fake()->phoneNumber(),
            'dob'=> fake()->date(),
            'anniversary'=> fake()->date(),
            'address'=>fake()->address(),
            'city'=>fake()->city(),
            'state'=>fake()->state(),
            'zip_code'=>fake()->postcode(),
            'occupation' => 'business',
            'ktn'=>fake()->numberBetween(0,100000000),
            'passport_number' => fake()->numberBetween(0,100000000),
            'passport_valid_from' => fake()->date(),
            'passport_valid_till' => fake()->date(),
            'passport_country' => fake()->country(),
            'client_due_date'=>fake()->date(),
            'isClient'=>fake()->numberBetween(0,1),
            'isActive'=>fake()->numberBetween(0,1)
        ];
    }
}
