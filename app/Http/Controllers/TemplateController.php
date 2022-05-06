<?php

namespace App\Http\Controllers;

use App\Models\Block;
use App\Models\Image;
use App\Models\Language;
use App\Models\Template;
use Illuminate\Http\Request;
use App\Http\Controllers\ProjectController;

class TemplateController extends Controller
{
    public function read($id)
    {
        $template = Template::find($id);
        $blocks = Block::where('template_id', $id)->orderBy('order', 'asc')->get();
        return view('app.panel.templates.project_' . $id, compact('template', 'blocks'));
    }

    // Legacy code don't delete yet
    public function edit($id = 0)
    {
        $template = Template::find($id);
        $languages = Language::all();

        return view('app.panel.editor', compact('template', 'languages'));
    }

    // Legacy code don't delete yet
    public function update(Request $request, Template $template)
    {
        $template->content = $request->content;
        $template->language_code = $request->language_code;

        $template->save();

        return view('app.panel.templates.project_' . $template->id);
    }

    public function store(Request $request)
    {
        $template = new Template();
        $template->id = 0;
        $template->language_code = $request->language_code;
        $template->content = $request->content;

        $template->save();
    }

    public function createBlock($id, $type)
    {
        $template = Template::find($id);
        $languages = Language::all();
        $method = 'POST';

        return view('app.panel.editor', compact('template', 'languages', 'type', 'method'));
    }

    public function storeBlock(Request $request)
    {
        $block = new Block();
        $block->template_id = $request->id;
        $block->type = 'paragraph';
        $block->order = Block::where('template_id', $request->id)->max('order') + 1;
        $block->content = $this->converter($block->type, $request->content, $request->filename);

        $block->save();

        return redirect()->route('template.read', $block->template_id);
    }

    public function editBlock(Request $request, Block $block)
    {
        $template = Template::find($block->template_id);
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

    public function updateBlock(Request $request, Block $block)
    {
        // dd($request->filename);
        $block->content = $this->converter($block->type, $request->content, $request->filename);
        $block->save();

        if($request->file('upload') != null) {
            $file = $request->file('upload');
            $fileType = $file->getClientOriginalExtension();
            $fileName = $request->get('name') . '.' . $fileType;
            $path = base_path() . '/storage/app/public/uploads/';
            $file->move($path, $fileName);

            $block->content = $this->converter($block->type, $request->content, $fileName);
            $block->save();
        }
        return redirect()->route('template.read', $block->template_id);
    }

    private function converter($type, $content, $filename)
    {
        switch ($type) {
            case 'paragraph':
                return '<div class="paragraph">' . $content . '</div>';
                break;
            case 'paragraph-image':
                return '<div class="paragraph paragraph-image paragraph-image-container"><div>' .
                    $content .
                    '</div><div class="photo"><img src="http://127.0.0.1:8000/storage/uploads/' . $filename . '"></div></div>';
                break;
            case 'image-paragraph':
                return '<div class="paragraph image-paragraph paragraph-image-container">' . $content . '</div>';
                break;
            default:
                return '';
        }
    }
}
