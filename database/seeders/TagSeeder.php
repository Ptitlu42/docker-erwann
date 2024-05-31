<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{Tag, Category};

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (Tag::DEFAULT_TAGS as $tag) {
            $tag = Tag::create(['name' => $tag]);
            for ($i = 0; $i < 3; $i++) {
                // Stupid seeder which sets a tag randomly to categories
                $category = Category::inRandomOrder()->first();
                $category->tags()->attach($tag->id);
            }

        }
    }
}
