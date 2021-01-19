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
            $table->bigInteger('beautician_id');
            $table->bigInteger('customer_id');
            $table->bigInteger('service_id');
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
