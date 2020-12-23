<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblHoaDonNhap extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_HoaDonNhap', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->Increments('id')->unsigned();
            $table->string('date');
            $table->double('total')->nullable();
            $table->double('status');
            $table->timestamps();
            $table->integer('iduser')->unsigned()->nullable();
            $table->integer('idsupp')->unsigned()->nullable();
            $table->foreign('iduser')->references('id')->on('Users');
            $table->foreign('idsupp')->references('id')->on('tbl_Supplier');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_HoaDonNhap');
    }
}
