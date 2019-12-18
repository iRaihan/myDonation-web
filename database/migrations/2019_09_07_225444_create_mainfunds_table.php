<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMainfundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mainfunds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('donator_id')->unsigned();
            $table->integer('cause_id');
            $table->integer('subservices_id');
            $table->integer('ammount');
            $table->string('date');
            $table->timestamps();
            $table->foreign('donator_id')->references('id')->on('donor_regs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mainfunds');
    }
}
