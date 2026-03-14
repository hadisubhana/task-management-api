<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $user = User::factory()->create([
            'name' => 'Demo User',
            'email' => 'demo@test.com',
            'password' => bcrypt('password')
        ]);

        Project::factory(5)->create([
            'user_id' => $user->id
        ])->each(function ($project) use ($user) {

            Task::factory(5)->create([
                'project_id' => $project->id
            ])->each(function ($task) use ($user) {

                Comment::factory(3)->create([
                    'task_id' => $task->id,
                    'user_id' => $user->id
                ]);
            });
        });
    }
}
