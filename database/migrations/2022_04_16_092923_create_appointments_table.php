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
            $table->timestamps();
            $table->string("doctorSpecialization");
            $table->foreignId('doctor_id')->constrained()->onDelete('cascade')->references('id')->on('doctors');
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->references('id')->on('users');
            $table->integer("consultancyFees");
            $table->string("appointmentDate");
            $table->string("appointmentTime");
            $table->integer("userStatus");
            $table->integer("doctorStatus");
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
