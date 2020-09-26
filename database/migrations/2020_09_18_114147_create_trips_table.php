<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->bigIncrement('id');
            $table->integer('prefecture_id')->unsigned();
            $table->integer('season_id')->unsigned();
            $table->integer('emotion_id')->unsigned();
            $table->string('title');
            $table->string('comment');
            $table->string('map_title')->nullable();
            $table->string('picture1')->nullable();
            $table->string('picture2')->nullable();
            $table->string('picture3')->nullable();
            $table->string('picture4')->nullable();
            $table->integer('created_by');
            $table->integer('updated_by');
            $table->tinyInteger('delete_flag');
            
            $table->timestamps();

            $table->foreign('prefecture_id')->references('id')->on('prefectures');
            $table->foreign('season_id')->references('id')->on('seasons');
            $table->foreign('emotion_id')->references('id')->on('emotions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trips');
    }
}
