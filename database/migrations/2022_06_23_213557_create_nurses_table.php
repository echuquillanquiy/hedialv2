<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nurses', function (Blueprint $table) {
            $table->id();

            $table->foreignId('order_id');
            $table->foreignId('patient_id');
            $table->foreignId('room_id');
            $table->foreignId('turn_id');

            $table->integer('hcl')->nullable();
            $table->string('frequency')->nullable();
            $table->integer('nhd')->nullable();
            $table->string('others')->nullable();
            $table->string('position')->nullable();
            $table->string('aspect_dializer')->nullable();
            $table->string('start_pa')->nullable();
            $table->string('end_pa')->nullable();
            $table->string('start_weight')->nullable();
            $table->string('end_weight')->nullable();
            $table->string('machine')->nullable();
            $table->string('brand_model')->nullable();
            $table->string('filter')->nullable();
            $table->string('uf')->nullable();
            $table->string('access1')->nullable();
            $table->string('access2')->nullable();
            $table->string('epo')->nullable();
            $table->string('iron')->nullable();
            $table->string('vitb12')->nullable();
            $table->text('start_observation')->nullable();
            $table->text('end_observation')->nullable();
            $table->text('s')->nullable();
            $table->text('o')->nullable();
            $table->text('a')->nullable();
            $table->text('p')->nullable();



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
        Schema::dropIfExists('nurses');
    }
}
