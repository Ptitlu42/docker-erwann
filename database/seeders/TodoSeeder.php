<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{User, Todo, Category};

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::where("name", "user")->first();
        $category = Category::where('name', 'Home')->first();
        Todo::factory()->count(5)->create(['user_id' => $user->id, 'category_id' => $category->id]);
    }
}
