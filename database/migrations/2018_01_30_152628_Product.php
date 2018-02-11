<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('masp', 100);
            $table->string('tensp')->nullable();
            $table->string('hangsx')->nullable();
            $table->string('size')->nullable();
            $table->string('soluong')->nullable();
            $table->string('thongtin')->nullable();
            $table->string('trangthai')->nullable();
            $table->string('anhsp')->nullable();
            // $table->string('status')->nullable();
            // $table->string('usertype')->nullable();
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
        //
        Schema::dropIfExists('product');
    }
}
