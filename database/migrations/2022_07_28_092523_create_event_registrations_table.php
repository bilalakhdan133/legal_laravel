<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_registrations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('event_id');
            $table->string('nama_depan',55);
            $table->string('nama_belakang',55)->nullable();
            $table->string('domisili',55);
            $table->string('perusahaan_instansi',55);
            $table->string('pekerjaan',55);
            $table->string('email',55);
            $table->string('nomor_telepon',15);
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_registrations');
    }
}
