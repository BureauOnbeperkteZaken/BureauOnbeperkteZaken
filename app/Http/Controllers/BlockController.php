<?php

namespace App\Http\Controllers;

use App\Models\Block;
use App\Models\Image;
use App\Models\Language;
use App\Models\Media;
use App\Models\MediaInBlock;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Storage;

class BlockController extends Controller
{
    public function create($project_id, $type)
    {
        $project = Project::find($project_id);
        $languages = Language::all();
        $method = 'POST';

        return view('app.panel.editor', compact('project', 'languages', 'type', 'method'));
    }

    public function store(Request $request)
    {
        $block = new Block();
        $block->project_id = $request->id;
        $block->content = $request->content;
        $block->order = Block::where('project_id', $request->id)->max('order') + 1;
        $block->type = $request->type;
        $block->save();
        if (($request->file('upload') != null) && ($block->type == 'paragraph-image' || $block->type == 'image-paragraph')) {
            MediaController::store($request->file('upload'), $block->id, $request->alt);
        }

        return redirect()->route('panelproject.read', $block->project_id);
    }

    public function edit($id)
    {
        $block = Block::find($id);
        $project = Project::find($block->project_id);
        $languages = Language::all();
        $method = 'PUT';
        $type = $block->type;

        if ($block->type == 'paragraph-image' || $block->type == 'image-paragraph') {
            $media = $block->media[0];
            $image = $media->images[0];
            return view('app.panel.editor', compact('block', 'project', 'languages', 'type', 'media', 'image', 'method'));
        }

        return view('app.panel.editor', compact('block', 'project', 'languages', 'type', 'method'));
    }

    public function update(Request $request, $id)
    {
        $block = Block::find($id);
        $block->content = $request->content;
        if ($block->type == 'paragraph-image' || $block->type == 'image-paragraph') {
            $media = $block->media[0];
            $image = $media->images[0];
            if ($request->file('upload') != null) {
                MediaController::store($request->file('upload'), $block->id, $request->alt);
                $block->media()->detach($media->id);
            } else if ($image->alt != $request->alt) {
                $image->alt = $request->alt ?? "";
                $image->save();
            }
        }
        $block->save();

        return redirect()->route('panelproject.read', $block->project_id);
    }
}
