<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function(Blueprint $table) {
            $table->increments('produk_id');
            $table->string('kode');
            $table->string('nama');
            $table->integer('supp_id')->unsigned();
            $table->string('merk');
            $table->string('kemasan');
            $table->string('harga');
            $table->string('cat');
            $table->timestamps();

            $table->foreign('supp_id')->references('supp_id')->on('supplaiers')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('produks');
    }

}
