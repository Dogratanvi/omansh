<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Comments;

class CommentsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comments::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'uuid' => $this->faker->uuid(),
            'name' => $this->faker->name(),
            'slug' => $this->faker->slug(),
            'comment' => $this->faker->word(),
            'parent_id' => $this->faker->word(),
            'commentable_id' => $this->faker->word(),
            'user_id' => $this->faker->word(),
            'user_name' => $this->faker->userName(),
            'order' => $this->faker->word(),
            'status' => $this->faker->word(),
        ];
    }
}
