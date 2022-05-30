<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlockMedia extends Model
{
    use HasFactory;

    protected $table = 'block_media';

    public $timestamps = false;

    public $fillable = [
        'block_id',
        'media_id',
    ];
}
