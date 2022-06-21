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
        Schema::create('profile_kampus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama',255);
            $table->text('alamat');
            $table->string('no_telp',20);
            $table->text('photo');
            $table->timestamps();
 
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('profile_kampus', function (Blueprint $table) {
            //
        });
    }
};
