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
        Schema::create('upgrade_packages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('content');
            $table->string('interval');
            $table->integer('price');
            $table->integer('thumbnail_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('upgrade_packages');
    }
};
