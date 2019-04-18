<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentSchoolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_school', function (Blueprint $table) {
            $table->increments('id');
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
        Schema::dropIfExists('payment_school');
    }
}
