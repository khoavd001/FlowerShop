<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tuvans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tuvans', function (Blueprint $table){
            $table->id();
            $table->string('Name',50);
            $table->integer('PhuongThuc');
            $table->string('ThongTin',500);
            $table->string('NoiDung',1000);
            $table->integer('trangthai');
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
        Schema::dropIfExists('tuvans');
    }
}
