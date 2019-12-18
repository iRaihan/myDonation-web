<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceFundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_funds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('donator_id');
            $table->integer('subservices_id');
            $table->integer('ammount');
            $table->string('funds_type');
            $table->string('bankings_type');
            $table->string('status');
            $table->string('transactions_id');
            $table->string('date');
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
        Schema::dropIfExists('service_funds');
    }
}
