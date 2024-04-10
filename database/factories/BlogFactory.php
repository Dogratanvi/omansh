<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Blog;

class BlogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Blog::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'uuid' => $this->faker->uuid(),
            'title' => $this->faker->sentence(4),
            'slug' => $this->faker->slug(),
            'author' => $this->faker->word(),
            'intro' => $this->faker->word(),
            'content' => $this->faker->paragraphs(3, true),
            'featured_image' => $this->faker->word(),
            'meta_title' => $this->faker->word(),
            'meta_keywords' => $this->faker->word(),
            'meta_descriptions' => $this->faker->text(),
            'meta_og_image' => $this->faker->word(),
            'meta_og_url' => $this->faker->word(),
            'published_at' => $this->faker->dateTime(),
            'order' => $this->faker->word(),
            'status' => $this->faker->word(),
        ];
    }
}
