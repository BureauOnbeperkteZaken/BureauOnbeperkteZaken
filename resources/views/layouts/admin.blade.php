<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
</head>
<aside id="panel">
    <h5>Voor de makers</h5>
    <h2>Onderhoudspaneel</h2>
    <br/>
    <nav>
{{--      {{ route('metadata.link', ['url' => url()->current()])}}  --}}
        <a href="/metadata/{{request()->segment(count(request()->segments()))}}">Metadata aanpassen</a>
        <a href="#">Test</a>
        <a href="#">Test</a>
        {{-- <?php $get = DB::table('')-get()>--}}
        {{-- Insert admin pages here --}}
    </nav>
    <br/>
    <nav>
        <a href="#">Test</a>
        <a href="#">Test</a>
        <a href="#">Test</a>
        {{-- Insert admin pages here --}}
    </nav>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</aside>
