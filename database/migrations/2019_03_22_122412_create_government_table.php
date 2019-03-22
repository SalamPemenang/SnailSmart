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
            $table->string('npsn');
            $table->string('school');
            $table->text('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('email');
            $table->string('password');
            $table->string('website-school')->nullable();
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
