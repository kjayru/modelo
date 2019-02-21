<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galleries', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('scort_id');
            $table->foreign('scort_id')->references('id')->on('scorts');
            $table->string('photo');
            $table->string('thumb');
            $table->timestamps();
        });
    }


public function down()
    {
        Schema::dropIfExists('galleries');
    }
}
