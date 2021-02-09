<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->string('judul');
            $table->string('edisi', 100)->nullable();
            $table->string('isbn_isnn', 40)->nullable();
            $table->string('deskripsi_fisik', 100)->nullable();
            $table->string('judul_seri', 100)->nullable();
            $table->text('catatan')->nullable();
            $table->string('slug')->nullable();
            $table->string('gambar_sampul', 50)->nullable();
            $table->integer('kategori_id')->nullable();
            $table->integer('rak_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
