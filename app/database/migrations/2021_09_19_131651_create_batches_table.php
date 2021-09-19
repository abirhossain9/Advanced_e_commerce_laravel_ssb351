<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batches', function (Blueprint $table) {
            $table->id();
            $table->string('batch_name')->unique();
            $table->string('slug');
            $table->string('starting_date')->nullable();
            $table->string('class_day')->nullable();
            $table->string('class_timing')->nullable();
            $table->string('fb_group')->nullable();
            $table->string('sit_number')->default(25);
            $table->integer('branch_id')->default(0);
            $table->integer('course_id')->default(0);
            $table->integer('mentor_id')->default(0);
            $table->integer('batch_type')->default(1)->comment('1 = Online, 2 = Offline');
            $table->integer('admission_status')->default(2)->comment('1 = Active, 2 = Inactive');
            $table->integer('status')->default(2)->comment('1 for active, 2 for inactive');
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
        Schema::dropIfExists('batches');
    }
}
