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

    public function store(Request $request) {
        $block = new Block();
        $block->project_id = $request->id;
        $block->order = Block::where('project_id', $request->id)->max('order') + 1;
        $block->type = $request->type;
        
        return redirect()->route('panelproject.read', $block->project_id);
    }
}
