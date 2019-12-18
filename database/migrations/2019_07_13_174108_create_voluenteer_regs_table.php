<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoluenteerRegsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voluenteer_regs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->integer('phone');
            $table->string('nid_bid');
            $table->string('profession');
            $table->string('organization');
            $table->string('blood');
            $table->string('present_address');
            $table->string('parmanent_address');
            $table->string('district');
            $table->string('zip_code');
            $table->string('image')->default('default_photo.jpg');
            $table->string('password');
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
        Schema::dropIfExists('voluenteer_regs');
    }
}
