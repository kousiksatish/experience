<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Interns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('interns', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',150);
            $table->integer('rollno');
            $table->string('department', 50);
            $table->string('column1', 1000);
            $table->string('column2', 1000);
            $table->string('column3', 1000);
            $table->string('column4', 1000);
            $table->string('column5', 1000);
            $table->string('column6', 1000);
            $table->string('column7', 1000);
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
        //
    }
}
