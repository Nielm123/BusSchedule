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
        Schema::create('stops', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('schedule_id')->unsigned();
            $table->string('name');
            $table->unsignedInteger('hour');
            $table->unsignedInteger('minute');
            $table->timestamps();
            $table
                ->foreign('schedule_id')
                ->references('id')
                ->on('schedules')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.

     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stops');
    }
};
