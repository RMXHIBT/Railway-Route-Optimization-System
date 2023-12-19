<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;





return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */


    public function up()
    {
        Schema::create('users', function (Blueprint $table) 
        {
            $table->primary('UniqID');
            $table->text('Name');
            $table->integer('Mobile');
            $table->text('Email');
            $table->text('Gender');
            $table->text('Passwd');
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */


    public function down()
    {
        Schema::dropIfExists('users');
    }
};
