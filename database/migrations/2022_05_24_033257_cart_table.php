<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart', function (Blueprint $table) {
            $table->bigIncrements('idcart');
            $table->integer('iduser');
            $table->integer('idproduct');
            $table->integer('soluong');
            $table->string('namesp',255);
            $table->integer('giasp');
            $table->integer('giagoc');
            $table->longText('chitietsp');
            $table->string('imgsp',255);
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
    }
}
