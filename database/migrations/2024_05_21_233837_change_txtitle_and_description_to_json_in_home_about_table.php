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
        Schema::table('home_abouts', function (Blueprint $table) {
            $table->json('tx_title')->change();
            $table->json('tx_description')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('home_abouts', function (Blueprint $table) {
            $table->string('tx_title')->change();
            $table->string('tx_description')->change();
        });
    }
};
