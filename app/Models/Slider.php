<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table = 'slider';

    protected $fillable = [
        'judul',
        'subjudul',
        'gambar',
        'tombol_text',
        'tombol_link',
    ];
}