<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    public $timestamps = false;

    public $fillable = [
        'name',
        'alt',
        'description',
    ];

    public static function validType($type)
    {
        return $type == 'jpeg' || $type == 'png' || $type == 'gif' ||
            $type == 'svg' || $type == 'webp' || $type == 'bmp' || $type == 'jpg';
    }
}
