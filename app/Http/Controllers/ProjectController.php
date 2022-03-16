<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Vimeo\Laravel\Facades\Vimeo;


class ProjectController extends Controller
{
    public function create(){
        return view('app/panel/new_project');
    }

    public function store(){
        request()->validate([
            'video_name' => 'required|max:255',
            'video_file' => 'file|required|mimes:mp4,mov,wmv,avi,flv'
        ]);
        $file = request()->file('video_file');
        $name = \request()->get('video_name');
        $video = Vimeo::upload($file, ['name' => $name]);
        $videoReturn = Vimeo::request($video, ['per_page' => 1], 'GET');
        $embedUrl = $videoReturn['body']['player_embed_url'];
        return view('app/panel/test_video')->with('video_link', $embedUrl);
    }
}
