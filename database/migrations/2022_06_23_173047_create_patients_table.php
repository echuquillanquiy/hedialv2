<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('dni')->unique();
            $table->date('date_of_birth')->nullable();
            $table->string('sex');
            $table->string('age');
            $table->string('address');
            $table->string('phone');
            $table->string('civil_status')->nullable();
            $table->string('instruction')->nullable();
            $table->string('ocupation')->nullable();
            $table->string('condition')->nullable();
            $table->date('last_job')->nullable();
            $table->string('hosp_origin');
            $table->string('code'); //15 digitos

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
        Schema::dropIfExists('patients');
    }
}
