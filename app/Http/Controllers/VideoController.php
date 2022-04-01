<?php

namespace App\Http\Controllers;

use App\Project;

class VideoController extends Controller
{
    public static function get()
    {
        $videoLink = Project::first()->video_link;
        return view('app/home')->with('videoLink', $videoLink);
    }

    public static function upload()
    {
        return view('app/panel/content_upload');
    }
}
