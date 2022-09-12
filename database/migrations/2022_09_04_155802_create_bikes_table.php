<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bikes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('model');
            $table->foreignId('manufacturer');
            $table->year('year');
            $table->integer('cc')->unsigned();
            $table->integer('hp')->unsigned();
            $table->integer('torque')->unsigned();
            $table->string('engine');
            $table->string('photo');
            $table->float('price')->unsigned();
            $table->boolean('in_production');
            $table->integer('total_produced');
            $table->string('type');
            $table->string('video');
            $table->string('other_photos');
            $table->string('other_videos');
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
        Schema::dropIfExists('bikes');
    }
};
