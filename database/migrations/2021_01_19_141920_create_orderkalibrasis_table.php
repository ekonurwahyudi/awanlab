<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderkalibrasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderkalibrasis', function (Blueprint $table) {
            $table->increments('order_id');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->string('order_ccl')->nullable();
            $table->string('order_namaalat')->nullable();
            $table->string('order_model')->nullable();
            $table->string('order_merek')->nullable();
            $table->string('order_sn')->nullable();
            $table->string('order_jumlah')->nullable();
            $table->string('order_lokasilab')->nullable();
            $table->string('order_jeniskal')->nullable();
            $table->string('order_namaser')->nullable();
            $table->text('order_alamatser')->nullable();
            $table->string('order_filesph')->nullable();
            $table->string('order_statussph')->nullable();
            $table->string('order_filepo')->nullable();
            $table->string('order_status')->nullable();
            $table->string('order_teknisi')->nullable();
            $table->string('order_tglantar')->nullable();
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
        Schema::dropIfExists('orderkalibrasis');
    }
}
