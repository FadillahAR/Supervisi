<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupervisisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supervisis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('materi');
            $table->string('mapel');
            $table->integer('rombel');
            $table->string('author');
            $table->string('file');
            $table->string('status');
            $table->text('deskripsi');
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
        Schema::dropIfExists('supervisis');
    }
}
