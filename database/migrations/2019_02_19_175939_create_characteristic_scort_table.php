<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharacteristicScortTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characteristic_scort', function (Blueprint $table) {

            $table->unsignedInteger('scort_id');
            $table->foreign('scort_id')->references('id')->on('scorts');
            $table->unsignedInteger('characteristic_id');
            $table->foreign('characteristic_id')->references('id')->on('characteristics');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('characteristic_scort');
    }
}
