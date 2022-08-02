<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('kategori_id')->nullable();
            $table->string('nama_event',55)->nullable();
            $table->string('lokasi_event',55)->nullable();
            $table->string('thumbnail_event',55)->nullable();
            $table->integer('kuota_event')->nullable();
            $table->text('deskripsi_event')->nullable();
            $table->dateTime('tanggal_event')->nullable();
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
        Schema::dropIfExists('event');
    }
}
