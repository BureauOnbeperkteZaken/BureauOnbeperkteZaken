<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectCreateRequest;
use App\Models\Block;
use App\Models\TemplateBlock;
use App\Models\Video;
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
            ->video
            ->link;
        return view('app/home')->with('videoLink', $videoLink);
    }

    public function read($id)
    {
        $blocks = Block::where('project_id', $id)->orderBy('order', 'asc')->get();
        return view('app.panel.project-builder', compact('blocks'));
    }

    public function create()
    {
        return view('app.panel.new_project');
    }

    public function store(ProjectCreateRequest $request)
    {
        $request->validated();
        $file = $request->file('video_file');
        $name = $request->get('video_name');
        $template = $request->get('template');
        $video = Vimeo::upload($file, ['name' => $name]);
        $videoReturn = Vimeo::request($video, ['per_page' => 1], 'GET');
        $embedUrl = $videoReturn['body']['player_embed_url'];

        $video = new Video();
        $video->link = $embedUrl;
        $video->save();

        $project = new Project();
        $project->video_id = $video->id;
        $project->language_code = 'nl';
        $project->save();

        $template_blocks = TemplateBlock::where('template_id', $template)->get();
        foreach ($template_blocks as $block) {
            $new_block = new Block();
            $new_block->project_id = $project->id;
            $new_block->content = $block->content;
            $new_block->type = $block->type;
            $new_block->order = $block->order;
            $new_block->save();
        }

        return redirect("panel/project/$project->id")->with('videoLink', $embedUrl);
    }

    public static function fileUpload()
    {
        return view('app/panel/content_upload');
    }

    public function storeFile(Request $request)
    {
        $validated = $request->validate([
            'upload' => 'required|file|mimes:pdf,xls,xlsx,png,jpeg,jpg,webp,svg,gif',
            'name' => 'required|string|max:255'
        ]);
        $file = $request->file('upload');
        $fileType = $file->getClientOriginalExtension();
        $fileName = $request->get('name') . '.' . $fileType;
        $path = base_path() . '/storage/app/public/uploads/';
        $file->move($path, $fileName);

        return redirect('/panel/content_upload');
    }

}
