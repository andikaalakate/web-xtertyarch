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
        Schema::create('home_tides', function (Blueprint $table) {
            $table->id();
            $table->enum('section', ['hero','service', 'about', 'feature', 'team', 'project', 'product', 'cta', 'testimoni']);
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->string('is_active')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_tides');
    }
};
