<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceModelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_model', function (Blueprint $table) {
           
            $table->unsignedInteger('model_id');
            $table->foreign('model_id')->references('id')->on('models');
            $table->unsignedInteger('service_id');
            $table->foreign('service_id')->references('id')->on('services');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_model');
    }
}
