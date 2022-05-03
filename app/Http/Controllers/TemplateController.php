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
        $blocks = Block::where('template_id', $id)->orderBy('order', 'asc')->get();
        return view('app.panel.templates.project_' . $id, compact('blocks'));
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

    public function editBlock(Request $request, Block $block)
    {
        $template = Template::find($block->template_id);
        $languages = Language::all();

        return view('app.panel.editor', compact('block', 'template', 'languages'));
    }

    public function updateBlock(Request $request, Block $block)
    {
        // Only supports paragraphs for now
        $block->content = '<div class="paragraph">' . $request->content . '</div>';
        $block->save();

        return redirect()->route('template.read', $block->template_id);
    }
}
