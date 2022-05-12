@props([
'type' => '',
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
