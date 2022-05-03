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

    public function edit($id = 0)
    {
        $template = Template::find($id);
        $languages = Language::all();

        return view('app.panel.editor', compact('template', 'languages'));
    }

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

    public function editBlock(Request $request, Block $block, Template $template)
    {
        
        return view('app.panel.templates.project_' . $template->id);
    }
}
