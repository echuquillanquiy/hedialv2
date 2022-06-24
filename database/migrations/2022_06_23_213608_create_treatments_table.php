<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreatmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treatments', function (Blueprint $table) {
            $table->id();

            $table->foreignId('order_id');
            $table->foreignId('patient_id');
            $table->foreignId('room_id');
            $table->foreignId('turn_id');

            $table->string('hr', 25)->nullable();
            $table->string('pa', 25)->nullable();
            $table->string('px', 25, 25)->nullable();
            $table->string('qb', 25)->nullable();
            $table->string('cnd', 25)->nullable();
            $table->string('ra', 25)->nullable();
            $table->string('rv', 25)->nullable();
            $table->string('ptm', 25)->nullable();
            $table->text('obs')->nullable();

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
        Schema::dropIfExists('treatments');
    }
}
