<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agen', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nik')->nullable();
            $table->string('no_rek')->nullable();
            $table->string('no_ktp')->nullable();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->text('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('photo')->default('default.jpg');
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
        Schema::dropIfExists('agen');
    }
}
