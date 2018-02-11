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
            $table->string('username', 100);
            $table->string('password')->nullable();
            $table->text('name')->nullable();
            $table->text('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('gender')->nullable();
            $table->string('email')->nullable();
            $table->string('status')->nullable();
            $table->string('usertype')->nullable();
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
