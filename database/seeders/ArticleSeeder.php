<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article; // Import your Article model
use Faker\Factory as Faker; // Import the Faker library for generating fake data

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Option 1: Manually create article data
        Article::create([
            'title' => 'First Sample Article',
            'content' => 'This is the content of the first sample article. You can add more text here.',
            'featured_image' => 'path/to/image1.jpg', // Replace with an actual path or URL
        ]);

        Article::create([
            'title' => 'Second Example Article',
            'content' => 'Here is the content for the second example article. Feel free to customize this.',
            'featured_image' => './public/image/image2.png', // Replace with an actual path or URL
        ]);

        // Option 2: Use Faker to generate multiple articles
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) { // Generate 10 sample articles
            Article::create([
                'title' => $faker->sentence(6), // Generate a sentence with 6 words
                'content' => $faker->paragraph(4), // Generate a paragraph with 4 sentences
                'featured_image' => $faker->imageUrl(640, 480, 'nature', true), // Generate a fake image URL
            ]);
        }
    }
}