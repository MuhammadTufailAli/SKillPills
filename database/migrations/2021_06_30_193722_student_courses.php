<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StudentCourses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('StudentCourses', function (Blueprint $table) {
            $table->id();
            $table->string("Artifical Intelligence");
            $table->string("Web Development");
            $table->string("Python");
            $table->string("Java");
            $table->string("C++");
            $table->string("CSS");
            $table->string("Html");
            $table->string("JavaScript");
            $table->string("Computer Engineering");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('StudentCourses');
    }
}
