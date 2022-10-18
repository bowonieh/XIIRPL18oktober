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
    private $table = 'buku';
    public function up()
    {
        //
        Schema::create($this->table,function(Blueprint $table){
            $table->addColumn('bigInteger','id_buku',[
                'primary'   => true,
                'length'    => 11,
               
            ]);
            $table->Integer('id_kategori')->nullable(false)->unsigned(false);
            $table->string('judul_buku',100)->nullable(false);
            $table->string('penerbit',100)->nullable(false);
            $table->string('penulis',100)->nullable(false);
            
            $table -> index('id_kategori');
            
            $table  ->foreign('id_kategori')
                    ->references('id_kategori')
                    ->on('kategori')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');           
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
        Schema::drop($this->table);
    }
};
