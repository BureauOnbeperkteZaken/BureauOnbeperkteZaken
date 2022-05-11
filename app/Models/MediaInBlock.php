<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaInBlock extends Model
{
    use HasFactory;

    protected $table = 'media_in_block';

    public $timestamps = false;

    public $fillable = [
        'block_id',
        'media_id',
    ];
}
