<?php

namespace App\Http\Controllers;

use App\Models\Block;
use App\Models\BlockMedia;
use App\Models\Image;
use App\Models\Media;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public static function store($file, $blockId, $alt = "", $description = "")
    {
        $block = Block::find($blockId);
        $fileName = $file->getClientOriginalName();
        $path = base_path() . '/storage/app/public/uploads/';
        $file->move($path, $fileName);

        $fileType = $file->getClientOriginalExtension();
        $fileName = $file->getClientOriginalName();

        $media = new Media();
        $media->filename = $fileName;
        $media->type = $fileType;
        $media->save();

        $image = new Image();
        $image->alt = $alt;
        $image->description = $description;
        $image->media_id = $media->id;
        $image->save();

        $block->media()->attach($media->id);
    }
}
