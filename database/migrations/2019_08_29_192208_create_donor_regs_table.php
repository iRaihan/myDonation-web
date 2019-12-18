<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonorRegsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donor_regs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('donor_full_name');
            $table->string('donor_email')->unique();
            $table->string('donor_address1');
            $table->string('donor_address2');
            $table->integer('donor_phone');
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
        Schema::dropIfExists('donor_regs');
    }
}
