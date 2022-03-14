<?php

use Illuminate\Support\Facades\DB;
use app\Http\Controllers\Controller;

class Video extends Controller
{
    public function __getVideoLink()
    {
        $videoLink = DB::table('projects')->select('video-link')->get()->first();
        echo $this->videoLink . "<br>";
        dd($this->videoLink);
        return $this->videoLink;
    }
}
