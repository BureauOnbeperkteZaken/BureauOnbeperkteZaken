<?php

namespace App\Http\Controllers;

use App\Models\MetaData;
use Illuminate\Http\Request;

class MetaDataController extends Controller
{
//    // Create metadata Form
    public function createForm(Request $request) {
        return view('meta-data-edit');
    }
    // Store Contact Form data
    public function MetaDataForm(Request $request) {
        // Form validation
        $this->validate($request, [
            'url' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);
        //  Store data in database
        MetaData::create($request->all());
        return view('meta-data-edit')->with('success', 'Opgeslagen');
    }
}
