<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Media extends Model
{
    use HasFactory;
    protected $table = 'omansh_media';

    protected $casts = [
        'id' => 'integer',
        'order' => 'integer',
        'deleted_at' => 'datetime',
    ];

    
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($gallery) {
            $uuid = Uuid::uuid4()->toString();
            $gallery->uuid = str_replace('-', '', $uuid);
        });
    }

    public function setFeaturedImageAttribute($value)
    {
        if ($value != null) {
            $this->attributes['featured_image'] = env('APP_URL') . '/' . "uploads/" . $value; // Store the URL
        }
    }



}
