<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TemplateBlock;

class TemplateController extends Controller
{
    public function read($id)
    {
        $blocks = TemplateBlock::where('template_id', $id)->orderBy('order', 'asc')->get();
        return view('app.panel.template-builder', compact('blocks'));
    }
}
