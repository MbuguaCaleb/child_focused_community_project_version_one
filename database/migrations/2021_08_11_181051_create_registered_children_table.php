<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisteredChildrenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registered_children', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('age');
            $table->binary('profile_picture')->nullable();
            $table->integer('dob');
            $table->integer('gender');
            $table->integer('country_of_residence');
            $table->boolean('is_sponsored')->nullable();
            $table->unsignedBigInteger('custodian_id');
            $table->foreign('custodian_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registered_children');
    }
}
