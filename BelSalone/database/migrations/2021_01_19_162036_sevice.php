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
        Schema::create('Sevice', function (Blueprint $table) {
            $table->id('sevice_id');
            $table->string('sevice_name');
            $table->integer('sevice_price');
            $table->bigInteger('category_id');
            $table->bigInteger('beautician_id');

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
