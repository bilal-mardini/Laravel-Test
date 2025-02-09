<?php

namespace Database\Factories;

use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */

class TaskFactory extends Factory
{
    protected $model = Task::class;

    public function definition()
    {
        return [
            'team_id' => \App\Models\Team::factory(), 
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'status' => 'pending',
            'due_date' => $this->faker->dateTimeBetween('now', '+1 month'),
            'created_by' => \App\Models\User::factory(), 
        ];
    }
}
