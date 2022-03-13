<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImmigrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('immigration', function (Blueprint $table) {
            $table->string('nama');
            $table->string('nama_airline');
            $table->string('no_paspor')->primary();
            $table->string('tanggal_permintaan');
            $table->string('tanggal_pengajuan');
            $table->string('tanggal_issued');
            $table->string('no_visa');
            $table->string('expired_date');
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
        Schema::dropIfExists('immigration');
    }
};
