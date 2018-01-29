<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('points', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('exercise')->default(0);
            $table->integer('attend')->default(0);
            $table->integer('other')->default(0);
            $table->integer('total')->default(0);
            $table->string('remark');
            
            $table->integer('lesson_id')->unsigned();
            $table->foreign('lesson_id')->references('id')->on('lessons');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('points');
    }
}
