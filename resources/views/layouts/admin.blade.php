@props([
'type' => '',
'project_id' => '',
])

<aside id="panel">
    <h5>Voor de makers</h5>
    <h2>Onderhoudspaneel</h2>
    <br/>
    <nav>

        @switch($type)
            @case('project')
                <a href="{{ route('paneledit_project') }}">Project aanpassen</a>
                <a href="{{ route('panelnew_project') }}">Nieuw project</a>
                @break;
            @case('contact')
                <a href="#">Ingestuurde berichten</a>
                @break;
            @case('project_details')
                <a href="{{ route('panelproject.edit.video', $project_id) }}">Verander hoofdvideo</a>
                <a href="#" id="remove_project">Verwijder project</a>
                @break;
        @endswitch
        {{-- Insert admin pages here --}}
    </nav>
    <br/>
    <nav>
        <a href="{{route('paneladd_user')}}">Nieuwe Gebruiker aanmaken</a>
        <a href="#">Optie</a>
        <a href="#">Optie</a>
        {{-- Insert admin pages here --}}
    </nav>
</aside>
