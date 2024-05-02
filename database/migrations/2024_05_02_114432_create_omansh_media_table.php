<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('omansh_media', function (Blueprint $table) {
           
            $table->id();
            $table->uuid('uuid')->nullable();
            $table->string('collection_name');
            $table->string('image_name');
            $table->unsignedBigInteger('collection_id');
            $table->string("media_path");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('omansh_media');
    }
};
