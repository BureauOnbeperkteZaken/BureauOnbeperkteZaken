<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemplateBlock extends Model
{
    use HasFactory;

    protected $table = 'templateblocks';

    public $timestamps = false;

    public $fillable = [
        'content',
        'order',
        'type',
    ];

    public function media()
    {
        return $this->belongsToMany(Media::class);
    }
}
