<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_uz',
        'name_ru',
        'name_en',
        'discription_uz',
        'discription_ru',
        'discription_en',
        'size',
        'price',
        'photo',
        'floor',
        'popular',
        'type_uz',
        'type_ru',
        'type_en',
    ];
}
