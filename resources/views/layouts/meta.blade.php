<link rel="stylesheet" type="text/css" href="{{ url('/stylesheets/stylesheet.css') }}" />
<title>{{DB::table('meta_data')->where('url', Request::path())->latest('created_at')->pluck('title')->first()}}</title>
<meta name="description" content="{{DB::table('meta_data')->where('url', Request::path())->latest('created_at')->pluck('description')->first()}}">
