<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDispatchLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dispatch_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('aircraft_id');
            $table->datetime('date_out');
            $table->datetime('date_in');
            $table->varchar('hobbs_out');
            $table->varchar('hobbs_in');
            $table->varchar('tach_out');
            $table->varchar('tach_in');
            $table->text('route');
            $table->integer('total_time');
            $table->integer('pilot');
            $table->integer('org_booking');
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
        Schema::dropIfExists('dispatch_logs');
    }
}
