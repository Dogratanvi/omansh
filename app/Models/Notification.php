<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Notification extends Model
{
    use HasFactory;
    protected $table = "notifications";

    
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($gallery) {
            $uuid = Uuid::uuid4()->toString();
            $gallery->uuid=str_replace('-', '', $uuid);

        });

    }
}
