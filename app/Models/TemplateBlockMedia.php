<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemplateBlockMedia extends Model
{
    use HasFactory;

    // protected $table = 'templateblock_media';

    public $timestamps = false;

    public $fillable = [
        'template_block_id',
        'media_id',
    ];
}
