<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function(Blueprint $table) {
            $table->increments('staff_id');
            $table->string('kode');
            $table->string('nama');
            $table->string('alamat');
            $table->string('kodepos');
            $table->string('telp');
            $table->string('email');
            $table->string('jabatan');
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
        Schema::drop('staff');
    }

}
