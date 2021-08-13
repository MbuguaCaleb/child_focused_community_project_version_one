<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Households extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('households', function (Blueprint $table) {
            $table->id();
            $table->integer('no_of_children');
            $table->unsignedBigInteger('custodian_id');
            $table->foreign('custodian_id')->references('id')->on('users');
            $table->integer('country');
            $table->char('custodian_name');
            $table->integer('sponsored_children')->nullable();
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
        Schema::table('households', function (Blueprint $table) {
            //
        });
    }
}
