<?php

namespace Database\Factories;

use App\Models\Testmonial;
use Illuminate\Database\Eloquent\Factories\Factory;

class TestmonialFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Testmonial::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'position' => $this->faker->jobTitle(),
            'company'  => $this->faker->company(),
            'message' => $this->faker->sentence(20)
        ];
    }
}
