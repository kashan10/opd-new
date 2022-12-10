<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinic_doctor', function (Blueprint $table) {
            $table->id();
            $table->unsignedBiginteger('doctor_id')->unsigned();
            $table->unsignedBiginteger('clinic_id')->unsigned();
			$table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade');
			$table->foreign('clinic_id')->references('id')->on('clinics')->onDelete('cascade');
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
        Schema::dropIfExists('clinic_doctor');
    }
};
