<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMxProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mx_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('aircraft_id');
            $table->integer('location');
            $table->date('last_100');
            $table->date('last_annual');
            $table->date('last_elt');
            $table->integer('last_flight');
            $table->varchar('hobbs');
            $table->varchar('tach');
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
        Schema::dropIfExists('mx_profiles');
    }
}
