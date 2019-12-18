<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('all_services', function (Blueprint $table) {
             $table->bigIncrements('id');
            $table->string('service_title');
            $table->string('service_discription',4000);
            $table->integer('service_category')->unsigned();
            $table->string('target');
            $table->string('alart');
            $table->string('image')->default('default_photo.jpg');
            $table->string('status');
            $table->timestamps();

$table->foreign('service_category')->references('id')->on('services_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('all_services');
    }
}
