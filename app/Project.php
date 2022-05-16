<?php

namespace App;

use App\Models\Video;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public $fillable = [
        'language_code',
    ];

    public function video()
    {
        return $this->belongsTo(Video::class);
    }
}
