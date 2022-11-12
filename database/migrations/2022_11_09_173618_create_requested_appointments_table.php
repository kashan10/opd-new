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
        Schema::create('requested_appointments', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150)->default('text');
            $table->string('email', 150)->nullable()->default('text');
            $table->string('phone',13);
            $table->string('age',13);
            $table->string("gender");
            $table->string('bloodgroup')->nullable();
            $table->foreignId('clinic_id')->constrained();
            $table->string('address',150);
            $table->string('doctor');
            $table->string('treatment_type', 400);
            $table->timestamp('time')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requested_appointments');
    }
};
