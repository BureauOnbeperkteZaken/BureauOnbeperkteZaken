@props([
'type' => '',
'project_id' => '',
])

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

        @switch($type)
            @case('contact')
                <a href="#">Ingestuurde berichten</a>
                @break;
            @case('project_details')
                <a href="{{ route('panelproject.edit.video', $project_id) }}">Verander hoofdvideo</a>
                <a href="{{ route('panelproject.edit.image', $project_id) }}">Verander project foto</a>
                <a href="{{ route('panelproject.edit.namedesc', $project_id) }}">Verander naam of beschrijving</a>
                <a href="#" id="remove_project">Verwijder project</a>
                @break;
        @endswitch
        <a href="/panel/metadata/{{request()->segment(count(request()->segments()))}}">Metadata aanpassen</a>
        <a href="{{ url('/panel/new_project') }}">Nieuw project</a>
        <a href="{{ url('/panel/add_user') }}">Nieuwe Gebruiker</a>
        {{-- Insert admin pages here --}}
    </nav>
    <br/>
</aside>
