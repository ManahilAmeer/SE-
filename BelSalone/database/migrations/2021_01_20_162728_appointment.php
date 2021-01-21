<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Appointment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Appointment', function (Blueprint $table) {
            $table->id('appointment_id');
            $table->date('appointment_date');
            $table->time('appointment_time');
            $table->string('appointment_status');
            $table->integer('appointment_payment');
            $table->bigInteger('beautician_id')->unsigned();
            $table->bigInteger('customert_id')->unsigned();
            $table->bigInteger('service_id')->unsigned();
            $table->foreign('beautician_id')->references('beautician_id')->on('beautician');
            // $table->foreign('customer_id')->references('customer_id')->on('customer');
            $table->foreign('service_id')->references('service_id')->on('service');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Appointment');
    }
}
