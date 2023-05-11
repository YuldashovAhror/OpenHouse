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
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->string('photo');
            $table->string('name_uz');
            $table->string('name_ru');
            $table->string('name_en');
            $table->text('discription_uz')->nullable();
            $table->text('discription_ru')->nullable();
            $table->text('discription_en')->nullable();
            $table->text('type_uz')->nullable();
            $table->text('type_ru')->nullable();
            $table->text('type_en')->nullable();
            $table->string('size');
            $table->string('price')->nullable();
            $table->string('floor')->nullable();
            $table->boolean('popular')->default(0);
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
        Schema::dropIfExists('plans');
    }
};
