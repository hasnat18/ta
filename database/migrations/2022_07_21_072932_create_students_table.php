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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->string('mobile');
            $table->string('cnic');
            $table->string('address');
            $table->string('gender');
            $table->string('photo');
            $table->string('otp');
            $table->string('status');
            $table->string('fee');
            $table->integer('subject_id')->constrained();
            $table->integer('location_id')->constrained();
            $table->integer('mode_id')->constrained();
            $table->integer('city_id')->constrained();
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
        Schema::dropIfExists('students');
    }
};
