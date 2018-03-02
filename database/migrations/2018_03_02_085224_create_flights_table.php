<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type_vs');
            $table->string('flight_number');
            $table->string('ak');
            $table->string('ap_1');
            $table->string('ap_2');
            $table->date('flight_date');
            $table->time('time_departure');
            $table->time('time_arrival');
            $table->string('check_in');
            $table->string('gate');
            $table->integer('status_id');
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
        Schema::dropIfExists('flights');
    }
}
