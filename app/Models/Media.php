<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    public $timestamps = false;

    public $fillable = [
        'filename',
        'type',
        'alt',
    ];

    public function blocks() {
        return $this->hasMany(Block::class);
    }
}
