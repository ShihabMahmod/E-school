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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('teacher_id')->unique();
            $table->foreign('teacher_id')->references('roll')->on('Users');
            $table->string('designation');
            $table->date('DOB');
            $table->string('sex');
            $table->string('address');
            $table->string('phone');
            $table->string('join_date');
            $table->string('background');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('teachers');
    }
};
