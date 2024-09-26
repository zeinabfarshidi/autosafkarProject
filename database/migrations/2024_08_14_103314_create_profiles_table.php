<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('ad_category_id')->nullable()->constrained('ad_categories')->onDelete('cascade')->onUpdate('cascade');
            $table->string('workTime')->nullable();
            $table->foreignId('state_id')->nullable()->constrained('states')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('city_id')->nullable()->constrained('cities')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('area_id')->nullable()->constrained('areas')->onDelete('cascade')->onUpdate('cascade');
            $table->text('description')->nullable();
            $table->text('myDistinction')->nullable();
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
        Schema::dropIfExists('profiles');
    }
}
