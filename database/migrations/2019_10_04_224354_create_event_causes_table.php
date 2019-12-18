<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventCausesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_causes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cas_id')->nullable();
            $table->string('e_date')->nullable();
            $table->string('e_time')->nullable();
            $table->string('ser_id')->nullable();
            $table->string('e_place')->nullable();
            $table->string('event_status');
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
        Schema::dropIfExists('event_causes');
    }
}
