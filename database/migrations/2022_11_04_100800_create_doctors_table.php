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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->references('id')->on('users')
                ->onDelete('cascade');

            $table->string('address');
            $table->string('phone');
            $table->string('nic');
            $table->string('age');
            $table->string('gender');
            $table->string('position');
            $table->string("specialization");
            $table->string("photo_path");
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
        Schema::dropIfExists('doctors');
    }
};
