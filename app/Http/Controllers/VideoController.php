<?php

namespace App\Http\Controllers;

use App\Project;

class VideoController extends Controller
{
    public static function getOnbeperktAndersVideoLink()
    {
        $videoLink = Project::first()->video_link;
        return $videoLink;
    }
}
