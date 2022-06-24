<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicals', function (Blueprint $table) {
            $table->id();

            $table->foreignId('order_id');
            $table->foreignId('patient_id');
            $table->foreignId('room_id');
            $table->foreignId('turn_id');

            $table->string('start_weight')->nullable();
            $table->string('start_pa')->nullable();
            $table->string('fc')->nullable();
            $table->text('clinical_trouble')->nullable();
            $table->text('evaluation')->nullable();
            $table->text('indications')->nullable();
            $table->string('hour_hd')->nullable();
            $table->string('heparin')->nullable();
            $table->string('dry_weight')->nullable();
            $table->string('uf')->nullable();
            $table->string('qb')->nullable();
            $table->string('qd')->nullable();
            $table->string('bathroom')->nullable();
            $table->string('temperature')->nullable();
            $table->string('cnd')->nullable();
            $table->string('start_na')->nullable();
            $table->string('end_na')->nullable();
            $table->string('area_filter')->nullable();
            $table->string('membrane')->nullable();
            $table->string('serological')->nullable();

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
        Schema::dropIfExists('medicals');
    }
}
