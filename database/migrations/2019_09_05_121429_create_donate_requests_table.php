<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donate_requests', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->integer('donor_id')->unsigned();
            $table->integer('sub_service');
            $table->integer('cause_id');
            $table->integer('other_fund');
            $table->integer('ammount');
            $table->string('fund_type');
            $table->string('banking_type');
            $table->string('status');
            $table->string('transaction_id');
            $table->string('date');
            $table->timestamps();
            
            $table->foreign('donor_id')->references('id')->on('donor_regs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donate_requests');
    }
}
