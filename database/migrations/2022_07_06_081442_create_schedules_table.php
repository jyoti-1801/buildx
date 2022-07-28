<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->string('title');
            $table->string('display_color');
            $table->date('start_date');
            $table->date('work_days');
            $table->string('assignees');
            $table->date('end_date');
            $table->time('hourly_start_time');
            $table->time('hourly_end_time');
            $table->string('remainder');
            $table->string('predecessor_name');
            $table->string('predecessor_type');
            $table->string('predecessor_lag');
            $table->string('schedule_phase');
            $table->string('schedule_tag');
            $table->string('subs_vendors');
            $table->string('all_notes');
            $table->string('internal_notes');
            $table->string('sub_notes');
            $table->string('owner_notes');
            $table->string('file');
            $table->timestamps();


            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
}
