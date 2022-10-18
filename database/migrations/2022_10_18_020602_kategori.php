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
        //
        Schema::create('kategori',function(Blueprint $tb){
            #$tb->integer('id_kategori',true)->primary();
           
            $tb->addColumn('Integer','id_kategori',[
                'length'    => 11,
                'autoIncrement' => true,
                'primary'       => true,
                'unsigned'      => false

            ]);
            $tb->string('kategori',50)->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('kategori');
    }
};
