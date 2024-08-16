<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Webinar extends Model
{
    use HasFactory;
    protected $casts = [
        'id' => 'integer',
        'deleted_at' => 'datetime',
    ];


    protected static function boot()
    {
        parent::boot();

        static::creating(function ($campaign) {
            $uuid = Uuid::uuid4()->toString();
            $campaign->uuid=str_replace('-', '', $uuid);
        });
      
    }
}
