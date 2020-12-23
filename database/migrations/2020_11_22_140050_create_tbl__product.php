<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('tbl_product', function (Blueprint $table) {
            
            $table->engine = "InnoDB";
            $table->Increments('id')->unsigned();
            $table->string('namepro');
            $table->string('imagepro')->nullable();
            $table->double('quantity');
            $table->double('price');
            $table->text('contentpro')->nullable();
            $table->text('status');
            $table->timestamps();
            $table->integer('idcat')->unsigned()->nullable();
            $table->foreign('idcat')->references('id')->on('tbl_Category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_product');
    }
}
