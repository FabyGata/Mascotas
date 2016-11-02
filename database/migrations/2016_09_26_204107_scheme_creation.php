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
            $table->string('adress');
            $table->integer('birthdate');
            
            $table->timestamps();
        });

        //pet table
        Schema::create('pets', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('race');
            $table->string('gender');
            $table->string('color');
            $table->integer('owner_id')->unsigned();
            $table->foreign('owner_id')->references('id')->on('owners');
            $table->timestamps();
        });

        //vaccine table

        Schema::create('vaccines', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('dose');
            $table->string('date_first_dose');
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
        Schema::drop('vaccines');
        Schema::drop('pets');
        Schema::drop('owners');
    }
}
