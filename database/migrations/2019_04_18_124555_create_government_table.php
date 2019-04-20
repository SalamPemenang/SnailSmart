<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGovernmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('government', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_government')->nullable();
            $table->unsignedInteger('donate_id')->nullable();
            $table->foreign('donate_id')->references('id')->on('category_donate')->onDelete('cascade');
            $table->string('npsn')->nullable();
            $table->string('no_rek')->nullable();
            $table->string('name')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->string('logo')->nullable();
            $table->string('website')->nullable();
            $table->string('saldo')->default('0');
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
        Schema::dropIfExists('government');
    }
}
