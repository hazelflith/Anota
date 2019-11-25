<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgressKaryawansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('progress_karyawans', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('idKaryawan');
            $table->foreign('idKaryawan')->references('idKaryawan')->on('karyawans');
            $table->string('idOrder');
            $table->foreign('idOrder')->references('idOrder')->on('orders');
            $table->date('deadlineKaryawan');
            $table->string('statusKerjaan');
            $table->string('uangPegangan');
            $table->integer('progressKerjaan');
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
        Schema::dropIfExists('progress_karyawans');
    }
}
