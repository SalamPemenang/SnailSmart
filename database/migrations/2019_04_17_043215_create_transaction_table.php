<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('transaction', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedInteger('school_id')->nullable();
            $table->foreign('school_id')->references('id')->on('government_school')->onDelete('cascade');
            $table->string('tahunan')->nullable();
            $table->string('bulanan')->nullable();
            $table->string('daftar_ulang')->nullable();
            $table->string('praktik')->nullable();
            $table->string('pkl')->nullable();
            $table->string('ujianakhir')->nullable();
            $table->string('ujiannasional')->nullable();
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
        Schema::dropIfExists('transaction');
    }
}
