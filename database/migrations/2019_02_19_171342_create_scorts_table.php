<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScortsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scorts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedInteger('package_id')->nullable();
            $table->foreign('package_id')->references('id')->on('packages');
            $table->unsignedInteger('region_id')->nullable();
            $table->foreign('region_id')->references('id')->on('regions');

            $table->string('name');
            $table->string('telefono')->nullable();
            $table->string('nacionalidad')->nullable();
            $table->string('etnia')->nullable();
            $table->string('edad')->nullable();
            $table->string('talla')->nullable();
            $table->string('peso')->nullable();
            $table->string('medidas')->nullable();
            $table->text('description')->nullable();
            $table->string('costohora')->nullable();
            $table->integer('entrevista')->nullable();
            $table->string('estacionamiento')->nullable();
            
            $table->integer('experiencia')->nullable();
            $table->integer('status')->default('1');

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
        Schema::dropIfExists('models');
    }
}
