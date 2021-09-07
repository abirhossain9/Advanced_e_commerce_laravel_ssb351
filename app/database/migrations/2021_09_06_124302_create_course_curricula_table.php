<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseCurriculaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_curricula', function (Blueprint $table) {
            $table->id();
            $table->integer('course_id');
            $table->string('one_en')->nullable();
            $table->string('one_bn')->nullable();
            $table->text('one_desc')->nullable();
            $table->string('two_en')->nullable();
            $table->string('two_bn')->nullable();
            $table->text('two_desc')->nullable();
            $table->string('three_en')->nullable();
            $table->string('three_bn')->nullable();
            $table->text('three_desc')->nullable();
            $table->string('four_en')->nullable();
            $table->string('four_bn')->nullable();
            $table->text('four_desc')->nullable();
            $table->string('five_en')->nullable();
            $table->string('five_bn')->nullable();
            $table->text('five_desc')->nullable();
            $table->integer('status')->default(1)->comment('1 for active, 2 for inactive');
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
        Schema::dropIfExists('course_curricula');
    }
}
