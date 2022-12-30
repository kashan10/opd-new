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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->timestamp('start');
            $table->timestamp('end')->nullable();
            $table->foreignId('treatment_id')->constrained('treatments');
            $table->foreignId('clinic_id')->constrained('clinics');
            $table->foreignId('patient_id')->constrained('patients');
            $table->string('way')->nullable();
            $table->text('note')->nullable();
            $table->text('form_content');
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
        Schema::dropIfExists('appointments');
    }
};
