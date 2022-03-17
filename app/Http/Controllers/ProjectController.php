<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectCreateRequest;
use App\Project;
use Illuminate\Http\Request;
use Vimeo\Laravel\Facades\Vimeo;


class ProjectController extends Controller
{
    public function create(){
        return view('app/panel/new_project');
    }

    public function store(ProjectCreateRequest $request){
        $request->validated();
        $file = $request->file('video_file');
        $name = $request->get('video_name');
        $video = Vimeo::upload($file, ['name' => $name]);
        $videoReturn = Vimeo::request($video, ['per_page' => 1], 'GET');
        $embedUrl = $videoReturn['body']['player_embed_url'];

        $project = new Project();
        $project->video_link = $embedUrl;
        $project->save();

        return redirect(route('panelhome'));
    }
}
