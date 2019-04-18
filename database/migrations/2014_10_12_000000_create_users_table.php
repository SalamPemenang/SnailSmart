<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nik')->nullable();
            $table->string('virtual_account')->nullable();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->text('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('photo')->default('default.jpg');
            $table->string('type')->default('umum');
            $table->string('saldo')->nullable();
            $table->string('save')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
