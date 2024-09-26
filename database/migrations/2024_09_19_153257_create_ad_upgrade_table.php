<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdUpgradeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ad_upgrade', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ad_id')->nullable()->constrained('ads')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('upgrade_id')->nullable()->constrained('upgrades')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('ad_upgrade');
    }
}
