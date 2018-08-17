<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePilotProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pilot_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pilot');
            $table->integer('last_flight');
            $table->string('highest_cert');
            $table->date('last_medical');
            $table->date('last_bfr');
            $table->date('last_ipc');
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
        Schema::dropIfExists('pilot_profiles');
    }
}
