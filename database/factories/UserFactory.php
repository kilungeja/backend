<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => "Admin",
            'last_name' => "Admin",
            'email' => "info@caravanmedia.co",
            'email_verified_at' => now(),
            'password' => Hash::make(env('ADMIN_PASS')), // password
            'remember_token' => Str::random(10),
        ];
        // return [
        //     'first_name' => $this->faker->firstName(),
        //     'last_name' => $this->faker->lastName(),
        //     'email' => $this->faker->email(),
        //     'role_id' => random_int(1, 5),
        //     'profile_pic' => $this->faker->imageUrl(),
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('password'), // password
        //     'remember_token' => Str::random(10),
        // ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
