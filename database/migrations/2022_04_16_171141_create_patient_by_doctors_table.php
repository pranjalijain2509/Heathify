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
        Schema::create('patient_by_doctors', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('doctor_id')->constrained()->onDelete('cascade')->references('id')->on('doctors');
            $table->string('PatientName');
            $table->string('PatientContno');
            $table->string('PatientEmail');
            $table->string('PatientGender');
            $table->string('PatientAdd');
            $table->string('PatientMedhis');
            $table->integer('PatientAge');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient_by_doctors');
    }
};
