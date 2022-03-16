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
            $table->timestamps();
            $table->integer('fee');
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->references('id')->on('users');
            $table->foreignId('specialization_id')->constrained()->onDelete('cascade')->references('id')->on('doctor_specializations');
            // $table->foreign('specialization')->references('id')->on('doctor_specializations');
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
