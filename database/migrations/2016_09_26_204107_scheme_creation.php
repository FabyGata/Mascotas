<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SchemeCreation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //owner table
        Schema::create('owners', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('address');
            $table->integer('birthdate');
            $table->string('ci');
            $table->string('phone');
            $table->string('email');
            $table->string('housetype');
            $table->timestamps();
        });

        //pet table
        Schema::create('pets', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('species');
            $table->string('race');
            $table->string('image');
            $table->integer('birthdate');
            $table->string('weight');
            $table->string('gender');
            $table->string('color');
            $table->boolean('sterilized');
            $table->string('description');
            $table->integer('owner_id')->unsigned();
            $table->foreign('owner_id')->references('id')->on('owners');
            $table->timestamps();
        });

        //vaccine table
        Schema::create('vaccines', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('dose');
            $table->string('brand');
            $table->timestamps();
        });

        //veterinary table
        Schema::create('veterinaries', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('address');
            $table->string('doctor_name');
            $table->string('phone');
            $table->timestamps();
        });

        //certificate table
        Schema::create('certificates', function(Blueprint $table){
            $table->increments('id');
            $table->integer('pet_id')->unsigned();
            $table->foreign('pet_id')->references('id')->on('pets');
            $table->integer('vaccine_id')->unsigned();
            $table->foreign('vaccine_id')->references('id')->on('vaccines');
            $table->integer('veterinary_id')->unsigned();
            $table->foreign('veterinary_id')->references('id')->on('veterinaries');
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
        Schema::drop('certificates');
        Schema::drop('veterinaries');
        Schema::drop('vaccines');
        Schema::drop('pets');
        Schema::drop('owners');
    }
}
