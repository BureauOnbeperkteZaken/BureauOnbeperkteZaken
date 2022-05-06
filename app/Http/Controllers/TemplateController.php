<?php

namespace App\Http\Controllers;

use App\Models\Block;
use App\Models\Language;
use App\Models\Template;
use Illuminate\Http\Request;

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

    public function createBlock($id)
    {
        $template = Template::find($id);
        $languages = Language::all();
        $method = 'POST';

        return view('app.panel.editor', compact('template', 'languages', 'method'));
    }

    public function storeBlock(Request $request)
    {
        $block = new Block();
        $block->template_id = $request->id;
        $block->type = 'paragraph';
        $block->order = Block::where('template_id', $request->id)->max('order') + 1;
        $block->content = $this->converter($block->type, $request->content);

        $block->save();

        return redirect()->route('template.read', $block->template_id);
    }

    public function editBlock(Request $request, Block $block)
    {
        $template = Template::find($block->template_id);
        $languages = Language::all();
        $method = 'PUT';

        return view('app.panel.editor', compact('block', 'template', 'languages', 'method'));
    }

    public function updateBlock(Request $request, Block $block)
    {
        // Only supports paragraphs for now
        $block->content = $this->converter($block->type, $request->content);
        $block->save();

        return redirect()->route('template.read', $block->template_id);
    }

    private function converter($type, $content)
    {

        switch ($type) {
            case 'paragraph':
                return '<div class="paragraph">' . $content . '</div>';
                break;
            case 'paragraph-image':
                return '<div class="paragraph-image">' . $content . '</div>';
                break;
            case 'image-paragraph':
                return '<div class="image-paragraph">' . $content . '</div>';
                break;
            default:
                return '';
        }
    }
}
