<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('english_title')->unique();
            $table->string('bangla_title')->nullable();
            $table->string('slug');
            $table->string('intro_video')->nullable();
            $table->integer('price');
            $table->integer('bangla_price');
            $table->integer('graduate_number');
            $table->integer('total_lecture');
            $table->integer('class_hour');
            $table->integer('course_duration');
            $table->string('motivational_content')->nullable();
            $table->string('course_opportunity')->nullable();
            $table->string('curriculam_description')->nullable();
            $table->integer('cupon_status')->comment('1 for accept, 2 for not accept');
            $table->integer('status')->comment('1 for active, 2 for inactive');
            $table->text('image')->nullable();
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
        Schema::dropIfExists('courses');
    }
}
