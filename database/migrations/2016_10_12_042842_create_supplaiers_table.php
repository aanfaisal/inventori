<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSupplaiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplaiers', function(Blueprint $table) {
            $table->increments('supp_id');
            $table->string('kode');
            $table->string('namasup');
            $table->string('alamat');
            $table->string('telp');
            $table->string('npwp');
            $table->string('fax');
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
        Schema::drop('supplaiers');
    }

}
