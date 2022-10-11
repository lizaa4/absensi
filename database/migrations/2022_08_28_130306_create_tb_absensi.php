<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_absensi', function (Blueprint $table) {
            $table->id('id_absensi');
            // karena setiap tabel ada yang namanya primary key(sebagai identifier (pengenal dan pembeda dan bersifat uniqe))
            $table->biginteger('id_user');
            $table->string('lattitude', 70);
            $table->string('longitude', 70);
            $table->timestamps();
        //mewakili created_at dan update_at  
    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_absensi');
    }
};
