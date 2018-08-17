<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMxLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mx_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('aircraft_id');
            $table->string('type');
            $table->varchar('hobbs');
            $table->varchar('tach');
            $table->datetime('date');
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
        Schema::dropIfExists('mx_logs');
    }
}
