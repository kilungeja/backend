<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Project::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'project_title' => $this->faker->sentence(6),
            'brief' => $this->faker->sentence(20),
            'result' => $this->faker->sentence(100),
        ];
    }
}
