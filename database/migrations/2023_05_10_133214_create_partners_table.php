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
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->string('photo');
            $table->string('people_photo');
            $table->string('name_uz');
            $table->string('name_ru');
            $table->string('name_en');
            $table->text('discription_uz')->nullable();
            $table->text('discription_ru')->nullable();
            $table->text('discription_en')->nullable();
            $table->text('position_uz')->nullable();
            $table->text('position_ru')->nullable();
            $table->text('position_en')->nullable();
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
        Schema::dropIfExists('partners');
    }
};
