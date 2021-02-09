<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member', function (Blueprint $table) {
                $table->integerIncrements('id');
                $table->string('nama_member')->nullable();
                $table->string('email_member')->nullable();
                $table->string('no_telp')->nullable();
                $table->date('tgl_lahir')->nullable();
                $table->timestamps('tgl_registrasi');
                $table->date('tgl_expired')->nullable();;
                $table->string('alamat')->nullable();
                $table->string('jk')->nullable();
                $table->string('foto')->nullable();
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
        Schema::dropIfExists('members');
    }
}
