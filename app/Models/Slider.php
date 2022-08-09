<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    
    protected $table = 'sliders';

    protected $fillable = [
        'slider_image',
        'slider_big_title',
        'slider_small_title',
        'position',
        'active_yn'
    ];
}
