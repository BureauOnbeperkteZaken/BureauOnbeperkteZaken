<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectCreateRequest;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Vimeo\Laravel\Facades\Vimeo;

class ProjectController extends Controller
{
    public function index(int $id)
    {
        $videoLink = Project::where('id', $id)
            ->first()
            ->video_link;
        return view('app/home')->with('videoLink', $videoLink);
    }

    public function create(){
        return view('app.panel.new_project');
    }

    public function store(ProjectCreateRequest $request)
    {
        $request->validated();
        $file = $request->file('video_file');
        $name = $request->get('video_name');
        $video = Vimeo::upload($file, ['name' => $name]);
        $videoReturn = Vimeo::request($video, ['per_page' => 1], 'GET');
        $embedUrl = $videoReturn['body']['player_embed_url'];

        $project = new Project();
        $project->video_link = $embedUrl;
        $project->save();

        return redirect("projects/$project->id")->with('videoLink', $embedUrl);
    }

    public static function fileUpload()
    {
        return view('app/panel/content_upload');
    }

    public function storeFile(Request $request)
    {

        $validated = $request->validate([
            'upload' => 'required|file|mimes:pdf,xls,xlsx,png,jpeg,jpg,webp,svg,gif',
            'name' => 'required|string|max:255',
        ]);
        $file = $request->file('upload');
        $fileName = $request->get('name');
        Storage::disk('public')->put('uploads', $file);
        return redirect('/content_upload');
    }
}
