<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditVideoRequest;
use App\Http\Requests\ProjectCreateRequest;
use App\Models\Block;
use App\Models\TemplateBlock;
use App\Models\Video;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
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
        return view('app.panel.project-builder', compact('blocks'))->with('projectId', $id);
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
        $link = $request->get('video_link');
        $template = $request->get('template');
        if ($file) {
            $video = Vimeo::upload($file, ['name' => $name]);
            $videoReturn = Vimeo::request($video, ['per_page' => 1], 'GET');
            $embedUrl = $videoReturn['body']['player_embed_url'];
        } else {
            $embedUrl = $link;
        }

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

    public function destroy($id)
    {
        Block::where('project_id', $id)->delete();
        Project::where('id', $id)->delete();
        return view('app.panel.success')->with('success_message', 'Project successvol verwijderd.');
    }

    public function editVideo($id)
    {
        $project = Project::where('id', $id)->first();
        return view('app.panel.edit_video')->with('project', $project);
    }

    public function updateVideo($id, EditVideoRequest $request)
    {
        $request->validated();
        $file = $request->file('video_file');
        $name = $request->get('video_name');
        $link = $request->get('video_link');
        $project = Project::where('id', $id)->first();
        if ($file) {
            $video = Vimeo::upload($file, ['name' => $name]);
            $videoReturn = Vimeo::request($video, ['per_page' => 1], 'GET');
            $embedUrl = $videoReturn['body']['player_embed_url'];
        } else if ($link) {
            $existing = Video::where('link', $link)->first();
            if ($existing){
                $project->video_id = $existing->id;
                $embedUrl = $existing->link;
                return redirect("panel/project/$project->id")->with('videoLink', $embedUrl);
            }
            $embedUrl = $link;
        } else{
            return Redirect::back();
        }

        $video = new Video();
        $video->link = $embedUrl;
        $video->save();

        $project->video_id = $video->id;
        $project->save();

        return redirect("panel/project/$project->id")->with('videoLink', $embedUrl);
    }
}
