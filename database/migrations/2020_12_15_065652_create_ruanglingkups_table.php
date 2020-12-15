<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRuanglingkupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ruanglingkups', function (Blueprint $table) {
            $table->increments('ruanglingkup_id');
            $table->string('ruanglingkup_lokasi');
            $table->string('ruanglingkup_kelompokukur');
            $table->string('ruanglingkup_instrument');
            $table->text('ruanglingkup_frekuensi');
            $table->text('ruanglingkup_rentangukur');
            $table->text('ruanglingkup_ketidakpastian');
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
        Schema::dropIfExists('ruanglingkups');
    }
}
