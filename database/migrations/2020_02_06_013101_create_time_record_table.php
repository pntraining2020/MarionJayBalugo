<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimeRecordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('time_records', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('employee_id')->index();
            $table->string('clock_in');
            $table->string('clock_out');
            $table->string('break_start');
            $table->string('break_end');
            $table->mediumInteger('total_time_worked');
            $table->mediumInteger('total_breaks_used');
            $table->boolean('is_in');
            $table->boolean('is_out');
            $table->boolean('is_break_started');
            $table->boolean('is_break_ended');
            $table->timestamps();
            $table->foreign('employee_id')->references('id')->on('employees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('timeRecord');
    }
}
