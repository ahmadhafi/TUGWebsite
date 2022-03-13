<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventSupportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventsupport', function (Blueprint $table) {
            $table->id('id_acara');
            $table->string('nama_acara');
            $table->string('tempat_acara');
            $table->date('tanggal');
            $table->time('waktu');
            $table->string('PIC_acara');
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
        Schema::dropIfExists('eventsupport');
    }
};
