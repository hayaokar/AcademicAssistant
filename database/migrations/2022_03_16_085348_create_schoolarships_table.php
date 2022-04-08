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
        Schema::create('schoolarships', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('major');
            $table->string('target');
            $table->integer('duration');
            $table->string('conditions');
            $table->string('requirements');
            $table->string('type');
            $table->integer('university_id')->nullable();
            $table->string('charity_name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schoolarships');
    }
};
