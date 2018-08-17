<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainingProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pilot');
            $table->string('training_for');
            $table->integer('cfi');
            $table->integer('last_lesson');
            $table->datetime('cert_granted');
            $table->string('syllabus');
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
        Schema::dropIfExists('training_profiles');
    }
}
