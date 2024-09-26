<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissionables', function (Blueprint $table) {
            $table->id();
            $table->foreignId('permission_id')->constrained('permissions')->onDelete('cascade')->onUpdate('cascade');
            $table->morphs('permissionable');
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
        Schema::dropIfExists('permissionables');
    }
}
