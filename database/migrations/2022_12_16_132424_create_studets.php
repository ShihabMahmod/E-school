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
        Schema::create('studets', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('roll')->unique();
            $table->foreign('roll')->references('roll')->on('Users');
            $table->string('class');
            $table->date('DOB');
            $table->string('sex');
            $table->string('address');
            $table->string('phone');
            $table->string('guardian_name');
            $table->string('join_class');
            $table->string('group')->nullable();
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
        Schema::dropIfExists('studets');
    }
};
