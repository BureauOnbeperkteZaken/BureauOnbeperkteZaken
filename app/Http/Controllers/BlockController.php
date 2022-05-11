<?php

namespace App\Http\Controllers;

use App\Models\Block;
use App\Models\Image;
use App\Models\Language;
use App\Models\Media;
use App\Project;
use Illuminate\Http\Request;

class BlockController extends Controller
{
    public function create($id, $type)
    {
        $template = Project::find($id);
        $languages = Language::all();
        $method = 'POST';

        return view('app.panel.editor', compact('template', 'languages', 'type', 'method'));
    }

    public function store(Request $request)
    {
        $fileName = $request->filename;

        $block = new Block();
        $block->template_id = $request->id;
        $block->order = Block::where('template_id', $request->id)->max('order') + 1;
        $block->type = $request->type;

        if ($request->file('upload') != null) {
            $fileName = $this->storeFileLocal($request->file('upload'));
        }

        $block->content = $this->converter($block->type, $request->content, $fileName);
        $block->save();

        // ! Function should be after block is saved to pass the block id
        if ($request->file('upload') != null) {
            $this->storeFileCloud($request->file('upload'), $block->id);
        }

        return redirect()->route('template.read', $block->template_id);
    }

    public function edit(Request $request, Block $block)
    {
        $template = Project::find($block->template_id);
        $languages = Language::all();
        $method = 'PUT';
        $image = null;

        if ($block->type == 'paragraph') {
            $block->content = preg_replace('/<\/?div(\s([a-z-]*)="([a-z-\s])*")*?>/', '', $block->content);
        } else if ($block->type == 'paragraph-image' || $block->type == 'image-paragraph') {
            $block->content = preg_replace('/<\/?div(\s([a-z-]*)="([a-z-\s])*")*?>/', '', $block->content);
            $image = new Image();
            preg_match('/(?<=(src=")).*(?=">)/', $block->content, $source);
            $image->name = preg_replace('/http:\/\/127.0.0.1:8000\/storage\/uploads\//', '', $source[0]);
            $block->content = preg_replace('/<img(\s([a-z-]*)="([0-9A-z-".:\/\s\(\)])*")*?>/', '', $block->content);
        }
        // $hallo = str_replace("world", "ßeter", "Hello world!");

        /*
        // Removes container class of the content
        $block->content = preg_replace('/<\/?div(\s([a-z-]*)="([a-z-\s])*")*?>(?=(<p>|$))/', '', $block->content);
        // preg_match('/(?<=(<div class="photo">))[\s\S]*(?=(<\/div>))/', $block->content, $imageHtml);
        $image = new Image();
        preg_match('/(?<=(src=")).*(?=">)/', $block->content, $source);
        $image->name = preg_replace('/http:\/\/127.0.0.1:8000\/storage\/uploads\//', '', $source[0]);

        // ! Temp code to receive to remove the photo from the content
        $block->content = preg_replace('/(?<=(<div class="photo">))[\s\S]*(?=(<\/div>))/', '', $block->content);
        dd($block->content);
        */
        return view('app.panel.editor', compact('block', 'template', 'languages', 'image', 'method'));
    }

    public function update(Request $request, Block $block)
    {
        $fileName = $request->filename;
        // dd($request->all());
        if ($request->file('upload') != null) {
            $fileName = $this->storeFileLocal($request->file('upload'));
            $this->storeFileCloud($request->file('upload'), $block->id);
        }
        $block->content = $this->converter($block->type, $request->content, $fileName);
        $block->save();
        return redirect()->route('template.read', $block->template_id);
    }

    
    private function storeFileLocal($file)
    {
        $fileName = $file->getClientOriginalName();
        $path = base_path() . '/storage/app/public/uploads/';
        $file->move($path, $fileName);
        return $fileName;
    }

    private function storeFileCloud($file, $blockId)
    {
        $fileType = $file->getClientOriginalExtension();
        $fileName = $file->getClientOriginalName();

        $media = new Media();
        $media->filename = $fileName;
        $media->type = $fileType;
        $media->$blockId;
        $media->save();

        return $fileName;
    }

    // TODO: this lol
    private function converter($type, $content, $filename)
    {
        switch ($type) {
            case 'paragraph':
                return '<div class="paragraph">' . $content . '</div>';
                break;
            case 'paragraph-image':
                return '<div class="paragraph paragraph-image paragraph-image-container"><div>' .
                    $content .
                    '</div><div class="photo"><img src="http://127.0.0.1:8000/storage/uploads/' .
                    $filename . '"></div></div>';
                break;
            case 'image-paragraph':
                return '<div class="paragraph image-paragraph paragraph-image-container"><div class="photo"><img src="http://127.0.0.1:8000/storage/uploads/' .
                    $filename . '"></div><div>' .
                    $content . '</div></div>';
                break;
            case 'gallery':
                return '<hr data-title="gallery"><div class="gallery"></div>';
                break;
            default:
                return '';
        }
    }
}
