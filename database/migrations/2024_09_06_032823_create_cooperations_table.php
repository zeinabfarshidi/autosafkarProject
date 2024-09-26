<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCooperationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cooperations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('order_id')->constrained('orders')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('offer_id')->constrained('offers')->onDelete('cascade')->onUpdate('cascade');
            $table->string('do')->nullable();
            $table->string('delay')->nullable();
            $table->string('result')->nullable();
            $table->text('opinion')->nullable();
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
        Schema::dropIfExists('cooperations');
    }
}
