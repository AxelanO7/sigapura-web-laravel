<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('shrines', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name_object');
            $table->text('description_detail');
            $table->text('description_visual');
            $table->integer('year_of_creation');
            $table->string('period_of_creation');
            $table->string('name_creator');
            $table->string('creator_style');
            $table->string('main_material');
            $table->string('additional_material');
            $table->string('creation_technique');
            $table->string('ornament');
            $table->integer('length');
            $table->integer('height');
            $table->integer('width');
            $table->integer('weight');
            $table->integer('volume');
            $table->string('physical_condition');
            $table->string('level_of_damage');  
            $table->string('country_location');
            $table->string('district_location');
            $table->string('subdistrict_location');
            $table->string('village_location');
            $table->string('functional');
            $table->string('ownership');
            $table->string('ownership_history');
            $table->string('historical_value');
            $table->string('cultural_value');
            $table->string('aesthetic_value');
            $table->string('economic_value');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shrines');
    }
};
