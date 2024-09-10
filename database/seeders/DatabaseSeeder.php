<?php

namespace Database\Seeders;

use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        // User::factory(1)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Category::create([
        //     'name' => 'Web Design',
        //     'slug' => 'web-design'
        // ]);

        // Post::create([
        //     'title' => 'Articel Satu',
        //     'author_id' => 1,
        //     'category_id' => 1,
        //     'slug' => 'artikel-satu',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur, quis inventore dolore deserunt laboriosam aperiam labore voluptas quidem reiciendis sapiente quibusdam. Sunt, quidem tempora quisquam similique hic error voluptates impedit.',
        // ]);

        $this->call([CategorySeeder::class, UserSeeder::class]);
        Post::factory(100)->recycle([
            Category::all(),
            User::all()
        ])->create();
    }
    
}
