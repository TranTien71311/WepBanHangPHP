<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblCTHoaDonNhap extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_CTHoaDonNhap', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->Increments('id')->unsigned();
            $table->double('quantity');
            $table->double('price');
            $table->double('thanhtien');
            $table->timestamps();
            $table->integer('idpro')->unsigned()->nullable();
            $table->integer('idhd')->unsigned()->nullable();
            $table->foreign('idpro')->references('id')->on('tbl_product');
            $table->foreign('idhd')->references('id')->on('tbl_HoaDonNhap');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_CTHoaDonNhap');
    }
}
