<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemplateBlock extends Model
{
    use HasFactory;

    protected $table = 'Templateblocks';

    public $timestamps = false;

    public $fillable = [
        'content',
        'order',
        'type',
    ];
}
