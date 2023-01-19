<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
          'name' => $this->faker->name(),
          'description' => $this->faker->text(15),
          'client_id' => $this->faker->randomElement([1,2,3,4,5,6,7,8,9,10]),
        ];
    }
}
