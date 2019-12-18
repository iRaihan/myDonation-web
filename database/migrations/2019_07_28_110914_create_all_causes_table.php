<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllCausesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('all_causes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('volunteer_id');
            $table->string('title');
            $table->string('discription',1000);
            $table->string('division');
            $table->string('location');
            $table->string('target');
            $table->string('alart');
            $table->string('image')->default('default_photo.jpg');;
            $table->string('status');
            $table->string('urgent');
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
        Schema::dropIfExists('all_causes');
    }
}
