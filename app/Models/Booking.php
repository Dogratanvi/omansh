<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Booking extends Model
{
    use HasFactory;

     /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'published_at' => 'timestamp',
        'deleted_at' => 'datetime',
    ];

   
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($blog) {
            $uuid = Uuid::uuid4()->toString();
            $blog->uuid=str_replace('-', '', $uuid);
        });

      
    }
}
