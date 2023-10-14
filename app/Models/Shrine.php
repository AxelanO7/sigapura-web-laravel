<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shrine extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name_object',
        'description_detail',
        'description_visual',
        'year_of_creation',
        'period_of_creation',
        'name_creator',
        'creator_style',
        'main_material',
        'additional_material',
        'creation_technique',
        'ornament',
        'length',
        'height',
        'width',
        'weight',
        'volume',
        'physical_condition',
        'level_of_damage',
        'country_location',
        'district_location',
        'subdistrict_location',
        'village_location',
        'functional',
        'ownership',
        'ownership_history',
        'historical_value',
        'cultural_value',
        'aesthetic_value',
        'economic_value',
    ];
}
