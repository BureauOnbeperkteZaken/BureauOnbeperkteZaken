<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ProjectCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'video_name' => 'max:255',
            'video_file' => 'file|mimes:mp4,mov,wmv,avi,flv',
            'template' => 'required',
            'video_link' => 'nullable|url',
            'project_name' => 'required|max:255',
            'project_description' => 'required|max:255',
            'image_file' => 'file|mimes:jpeg,png,jpg,gif|max:2048',
            'image_link' => 'nullable|url',
        ];
    }
}
