<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScortCharacteristicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scort_characteristic', function (Blueprint $table) {
            $table->unsignedInteger('scort_id');
            $table->foreign('scort_id')->references('id')->on('scorts')->onDelete('cascade');
            $table->unsignedInteger('characteristic_id');
            $table->foreign('characteristic_id')->references('id')->on('characteristics')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scort_characteristic');
    }
}
