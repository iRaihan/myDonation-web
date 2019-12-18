<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSendmessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sendmessages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('num_person');
            $table->string('hidden_id');
            $table->string('place');
            $table->text('message');
            $table->text('e_id');
            $table->text('amount');
            $table->text('details');
            $table->string('donar_id');
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
        Schema::dropIfExists('sendmessages');
    }
}
