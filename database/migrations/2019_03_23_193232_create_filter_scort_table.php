<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilterScortTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filter_scort', function (Blueprint $table) {
            $table->unsignedInteger('scort_id');
            $table->foreign('scort_id')->references('id')->on('scorts')->onDelete('cascade');
            $table->unsignedInteger('filter_id');
            $table->foreign('filter_id')->references('id')->on('filters')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('filter_scort');
    }
}
