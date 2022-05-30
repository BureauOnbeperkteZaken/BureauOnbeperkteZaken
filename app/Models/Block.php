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

    public function media()
    {
        return $this->belongsToMany(Media::class);
    }

    // Wraps block content in styling div
    public function getContent()
    {
        switch ($this->type) {
            case 'paragraph':
                return '<div class="paragraph">' . $this->content . '</div>';
                break;
            case 'paragraph-image':
                $media = $this->media[0];
                $image = $media->images[0];
                return '<div class="paragraph paragraph-image paragraph-image-container"><div>' .
                    $this->content .
                    '</div><div class="photo"><img src="/storage/uploads/' . $media->filename .
                    '" alt="' . $image->alt . '" description="' . $image->description . '"></div></div>';
                break;
            case 'image-paragraph':
                $media = $this->media[0];
                $image = $media->images[0];
                return '<div class="paragraph image-paragraph paragraph-image-container"><div class="photo"><img src="/storage/uploads/'
                    . $media->filename .
                    '" alt="' . $image->alt . '" description="' . $image->description . '"></div><div>' .
                    $this->content .
                    '</div></div>';
                break;
            case 'gallery':
                // TODO: add gallery
                return '<hr data-title="gallery"><div class="gallery"></div>';
                break;
            default:
                return '';
        }
    }
}
