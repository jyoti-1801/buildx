<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLabourRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labour_rates', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->float('site_supervisor')->default(0.00);
            $table->float('labourer')->default(0.00);
            $table->float('general_builder')->default(0.00);
            $table->float('ground_worker')->default(0.00);
            $table->float('ground_worker_excavator_dumper')->default(0.00);
            $table->float('carpenter')->default(0.00);
            $table->float('bricklayer')->default(0.00);
            $table->float('bricklaying_gang')->default(0.00);
            $table->float('plasterer')->default(0.00);
            $table->float('plumber')->default(0.00);
            $table->float('electrician')->default(0.00);
            $table->float('decorator')->default(0.00);
            $table->float('roofer')->default(0.00);
            $table->float('ceramic_porcelain_tiler')->default(0.00);
            $table->timestamps();
/*
            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');
            $table->timestamps();*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('labour_rates');
    }
}
