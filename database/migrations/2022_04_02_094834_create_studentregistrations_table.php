<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentregistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentregistrations', function (Blueprint $table) {
            $table->id();
            $table->string('studentName');
            $table->string('BaStudentName');
            $table->string('FatherName');
            $table->string('BaFatherName');
            $table->string('MotherName');
            $table->string('BaMotherName');
            $table->string('class');
            $table->string('section');
            $table->date('date');
            $table->string('gender');
            $table->integer('number');
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
        Schema::dropIfExists('studentregistrations');
    }
}
