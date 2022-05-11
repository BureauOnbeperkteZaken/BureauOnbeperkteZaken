<?php

namespace App\Http\Controllers;

use App\Models\Block;
use App\Models\Language;
use Illuminate\Http\Request;
use App\Models\TemplateBlock;

class TemplateController extends Controller
{
    public function read($id)
    {
        $blocks = TemplateBlock::where('template_id', $id)->orderBy('order', 'asc')->get();
        return view('app.panel.templates.project_' . $id, compact('blocks'));
    }

    // Legacy code don't delete yet
    public function edit($id = 0)
    {
        $template = TemplateBlock::find($id);
        $languages = Language::all();

        return view('app.panel.editor', compact('template', 'languages'));
    }

    // Legacy code don't delete yet
    public function update(Request $request, TemplateBlock $template)
    {
        $template->content = $request->content;
        $template->language_code = $request->language_code;

        $template->save();

        return view('app.panel.templates.project_' . $template->id);
    }

    public function store(Request $request)
    {
        $template = new TemplateBlock();
        $template->id = 0;
        $template->language_code = $request->language_code;
        $template->content = $request->content;

        $template->save();
    }
}
