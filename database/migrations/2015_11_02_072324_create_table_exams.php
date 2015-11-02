<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableExams extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('exams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('timestamp',150);
            $table->string('name',150);
            $table->string('department', 50);
            $table->string('exam', 10);
            $table->string('when_prep', 200);
            $table->string('classes', 250);
            $table->string('materials', 200);
            $table->string('when_exam', 200);
            $table->string('score', 30);
            $table->string('suggestions', 900);
            $table->string('tricks', 1000);
            $table->string('start_prep', 150);
            $table->string('hours', 250);
            $table->string('concentrate', 800);
            $table->string('rating', 20);
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
