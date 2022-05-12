<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\MediaInBlock;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public static function storeLocal($file)
    {
        $fileName = $file->getClientOriginalName();
        $path = base_path() . '/storage/app/public/uploads/';
        $file->move($path, $fileName);
        return $fileName;
    }

    public static function storeCloud($file, $blockId)
    {
        $fileType = $file->getClientOriginalExtension();
        $fileName = $file->getClientOriginalName();

        $media = new Media();
        $media->filename = $fileName;
        $media->type = $fileType;
        $media->save();

        $mediaBlock = new MediaInBlock();
        $mediaBlock->block_id = $blockId;
        $mediaBlock->media_id = $media->id;
        $mediaBlock->save();

        return $fileName;
    }
}
