<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//created with:"php artisan make:model Student_model -m"
class CreateStudentModelsTable extends Migration 
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_models', function (Blueprint $table) {
            $table->id();
            $table->string('Forename'); //with command "php artisan migrate" those var can be add in db
            $table->string('Lastname');
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
        Schema::dropIfExists('student_models');
    }
}
