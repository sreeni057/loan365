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
            $table->string('mortgage_type',64)->nullable();
            $table->string('mortgage_last_id',64)->nullable();
            $table->string('name',64)->nullable();
            $table->string('lname',64)->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('users_key');
            $table->string('phone',16)->nullable();
            $table->enum('email_verified',['0','1'])->default('1');
            $table->enum('active',['0','1'])->default('1');
            $table->rememberToken();
            $table->string('forgot_token',100)->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            //$table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
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
