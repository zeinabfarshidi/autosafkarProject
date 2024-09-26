<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('ad_category_id')->constrained('ad_categories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('state_id')->constrained('states')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('city_id')->constrained('cities')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('area_id')->constrained('areas')->onDelete('cascade')->onUpdate('cascade');
            $table->string('title');
            $table->string('mobile');
            $table->string('minPrice');
            $table->string('maxPrice');
            $table->text('description')->nullable();
            $table->string('views')->default(0);
            $table->string('status')->nullable();
            $table->integer('showNumber')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ads');
    }
}
