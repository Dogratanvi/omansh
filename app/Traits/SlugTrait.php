<?php

namespace App\Traits;
use Illuminate\Support\Str;

trait SlugTrait
{
    public function generateSlug($value)
    {
        // Logic to generate slug from $value
        // You can use Laravel's Str::slug() method
        return \Illuminate\Support\Str::slug($value);
    }
}