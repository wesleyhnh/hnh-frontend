<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('title');
            $table->text('meta_description')->nullable();

            // Hero section
            $table->boolean('show_hero')->default(true);
            $table->string('hero_title')->nullable();
            $table->string('hero_subtitle')->nullable();

            // Body section
            $table->boolean('show_body')->default(true);
            $table->longText('body')->nullable();

            // CTA section
            $table->boolean('show_cta')->default(true);
            $table->string('cta_text')->nullable();
            $table->string('cta_subtext')->nullable();

            $table->boolean('is_published')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
