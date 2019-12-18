<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcceptCausesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accept_causes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('volunteer_id');
            $table->string('title');
            $table->string('discription');
            $table->string('division');
            $table->string('location');
            $table->string('target');
            $table->string('alart');
            $table->string('image')->default('default_photo.jpg');;
            $table->string('status');
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
        Schema::dropIfExists('accept_causes');
    }
}
