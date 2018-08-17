<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlightFinancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flight_finances', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cfi');
            $table->integer('ins_rate');
            $table->integer('ins_time');
            $table->integer('pilot1');
            $table->integer('pilot2');
            $table->integer('flight');
            $table->integer('total_time');
            $table->integer('aircraft');
            $table->integer('aircraft_rate');
            $table->integer('misc_costs');
            $table->integer('total_cost');
            $table->integer('billing_method');
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
        Schema::dropIfExists('flight_finances');
    }
}
