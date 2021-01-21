<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Sevice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Service', function (Blueprint $table) {
            $table->id('service_id');
            $table->string('service_name');
            $table->integer('service_price');
            $table->bigInteger('category_id')->unsigned();
            $table->foreign('category_id')->references('category_id')->on('category');
            $table->bigInteger('beautician_id')->unsigned();
            $table->foreign('beautician_id')->references('beautician_id')->on('beautician');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Sevice');
    }
}
