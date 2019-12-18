<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBloodPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood_posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('volunteer_id');
            $table->string('blood_group');
            $table->string('name');
            $table->string('phone');
            $table->string('location');
            $table->string('last_date');
            $table->string('unit');
            $table->string('message');
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
        Schema::dropIfExists('blood_posts');
    }
}
