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
            $table->string('order_ccl');
            $table->string('order_namaalat');
            $table->string('order_model');
            $table->string('order_merek');
            $table->string('order_sn');
            $table->string('order_jumlah');
            $table->string('order_lokasilab');
            $table->string('order_jeniskal');
            $table->string('order_namaser');
            $table->text('order_alamatser');
            $table->string('order_filesph');
            $table->string('order_statussph');
            $table->string('order_filepo');
            $table->string('order_status');
            $table->string('order_teknisi');
            $table->string('order_tglantar');
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
