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
        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('like_most_about_class');
            $table->string('teacher_knowledge')->nullable();
            $table->boolean('instruction_given')->nullable();
            $table->string('yoga_sequence')->nullable();
            $table->string('meet_your_exceptations')->nullable();
            $table->text('like_about_class')->nullable();
            $table->text('help_us_improve')->nullable();
            $table->string('hear_about_omansh')->nullable();
            $table->string('order')->nullable();
            $table->string('status');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feedback');
    }
};
