<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Idea;
use App\Models\Status;
use App\Models\Vote;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::factory()->create([
            'name' => 'Jeremy',
            'email' => 'jeremynguyen03@gmail.com',
        ]);

        User::factory(19)->create();

        Category::factory()->create(['name' => 'DevOps']);
        Category::factory()->create(['name' => 'Frameworks']);
        Category::factory()->create(['name' => 'Languages']);
        Category::factory()->create(['name' => 'Techniques']);

        Status::factory()->create(['name' => 'Open', 'classes' => 'bg-gray-200']);
        Status::factory()->create(['name' => 'Considering', 'classes' => 'bg-purple text-white']);
        Status::factory()->create(['name' => 'In Progress', 'classes' => 'bg-yellow text-white']);
        Status::factory()->create(['name' => 'Implemented', 'classes' => 'bg-green text-white']);
        Status::factory()->create(['name' => 'Closed', 'classes' => 'bg-red text-white']);

        Idea::factory(100)->create();

        // Generate unique votes. Ensure idea_id and user_id are unique for each row
        foreach (range(1, 20) as $user_id) {
            foreach (range(1, 100) as $idea_id) {
                if ($idea_id % 2 === 0) {
                    Vote::factory()->create([
                        'idea_id' => $idea_id,
                        'user_id' => $user_id,
                    ]);
                }
            }
        }
    }
}
