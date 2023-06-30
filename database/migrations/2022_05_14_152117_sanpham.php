<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class Sanpham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('idsp');
            $table->string('namesp', 255);
            $table->integer('giasp');
            $table->integer('giagoc');
            $table->integer('soluong');
            $table->string('imgsp',255);
            $table->string('type_product',255);
            $table->longText('chitietsp');
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
