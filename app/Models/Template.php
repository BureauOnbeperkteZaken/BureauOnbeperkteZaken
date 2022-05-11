<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    public $fillable = [
        'name',
        'content'
    ];

    public function language() {
        return $this->belongsTo(Language::class, 'code', 'language_code');
    }

}
