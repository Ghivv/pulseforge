<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Article::factory()->create([
            'title' => 'Sample Article',
            'content' => 'This is a sample article.',
            'category' => 'General',
            'author_id' => 1, // Pastikan ID pengguna ini ada
            'image' => null,
        ]);
    }
}
