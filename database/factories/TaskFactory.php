<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
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
          'project_id' => $this->faker->randomElement([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20]),
          'user_id' => $this->faker->randomElement([3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20]),
        ];
    }
}
