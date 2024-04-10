<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Testimonial;

class TestimonialFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Testimonial::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'uuid' => $this->faker->uuid(),
            'name' => $this->faker->name(),
            'slug' => $this->faker->slug(),
            'type' => $this->faker->word(),
            'category' => $this->faker->word(),
            'content' => $this->faker->paragraphs(3, true),
            'featured_image' => $this->faker->word(),
            'featured_video' => $this->faker->word(),
            'order' => $this->faker->randomNumber(),
            'meta_title' => $this->faker->word(),
            'meta_keywords' => $this->faker->word(),
            'meta_descriptions' => $this->faker->text(),
            'meta_og_image' => $this->faker->word(),
            'meta_og_url' => $this->faker->word(),
            'status' => $this->faker->word(),
        ];
    }
}
