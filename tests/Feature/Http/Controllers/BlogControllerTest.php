<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Blog;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\BlogController
 */
final class BlogControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    #[Test]
    public function index_displays_view(): void
    {
        $blogs = Blog::factory()->count(3)->create();

        $response = $this->get(route('blogs.index'));

        $response->assertOk();
        $response->assertViewIs('blog.index');
        $response->assertViewHas('blogs');
    }


    #[Test]
    public function create_displays_view(): void
    {
        $response = $this->get(route('blogs.create'));

        $response->assertOk();
        $response->assertViewIs('blog.create');
    }


    #[Test]
    public function store_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\BlogController::class,
            'store',
            \App\Http\Requests\BlogStoreRequest::class
        );
    }

    #[Test]
    public function store_saves_and_redirects(): void
    {
        $title = $this->faker->sentence(4);
        $content = $this->faker->paragraphs(3, true);

        $response = $this->post(route('blogs.store'), [
            'title' => $title,
            'content' => $content,
        ]);

        $blogs = Blog::query()
            ->where('title', $title)
            ->where('content', $content)
            ->get();
        $this->assertCount(1, $blogs);
        $blog = $blogs->first();

        $response->assertRedirect(route('blog.index'));
    }
}
