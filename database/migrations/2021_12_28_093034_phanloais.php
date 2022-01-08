<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Phanloais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phanloais', function (Blueprint $table){
            $table->id();
            $table->string('BoHoa',10);
            $table->string('LoaiHoa',20);
            $table->string('MaLoai',10);
            $table->string('TenBoHoa',100);
            $table->integer('Gia');
            $table->string('Chitiet',500);
            $table->string('DipTang',500);
            $table->integer('tinhtrang');
            $table->string('link',200);
            $table->string('ynghia',3000);
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
        Schema::dropIfExists('phanloais');
    }
}
