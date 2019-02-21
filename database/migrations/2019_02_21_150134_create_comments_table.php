<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');

            $table->text('body');

            $table->unsignedInteger('client_id');
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');

            $table->unsignedInteger('scort_id');
            $table->foreign('scort_id')->references('id')->on('scorts')->onDelete('cascade');

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
        Schema::dropIfExists('comments');
    }
}
