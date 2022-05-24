<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    use HasFactory;

    public $timestamps = false;

    public $fillable = [
        'content',
        'language_code',
        'order',
    ];

    public function media() {
        return $this->belongsToMany(Media::class);
    }
}
