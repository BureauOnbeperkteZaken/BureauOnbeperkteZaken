<style>
    .content {
        gap: 80px;
    }
</style>
<x-page.fullwidth type="project_details" project_id="{{$projectId}}" :cards="true">

    <x-slot:background>
        <iframe id="bigVideo" type="text/html" title="Vimeo player" src="{{ $videoLink }}" allowfullscreen></iframe>
    </x-slot:background>

    <div class="editor">
        <div class="content">
            @foreach ($blocks as $block)
            {!! $block->content !!}
            <script>
                let block{{$block->order}} = document.querySelectorAll('.paragraph')[{{$block->order - 1}}];
                block{{$block->order}}.innerHTML += "<div class=\"editor-toolbar\"><button><a href=\"{{route('panelblock.edit', $block->id)}}\">Bewerken</a></button></div>";
            </script>
            @endforeach
        </div>
        <hr>
        <div class="flex">
            <h5>Dit is niet zichtbaar op de website</h5>
            <h2>Voeg een blok toe</h2>
            <button><a href="{{route('panelblock.create', ['project' => $block->project_id, 'type' => 'paragraph'])}}">Paragraaf</a></button>
            <button><a href="{{route('panelblock.create', ['project' => $block->project_id, 'type' => 'image-paragraph'])}}">Foto link en tekst rechts</a></button>
            <button><a href="{{route('panelblock.create', ['project' => $block->project_id, 'type' => 'paragraph-image'])}}">Tekst link en foto rechts</a></button>
            <!-- <button><a href="{{route('panelblock.create', ['project' => $block->project_id, 'type' => 'gallery'])}}">Gallery</a></button> -->
        </div>
    </div>
    <script>
        document.querySelector('#remove_project').addEventListener('click', function(e) {
            e.preventDefault();
            if (confirm('Are you sure?')) {
                window.location.href = '{{route('panelproject.remove', $block->project_id)}}';
            }
        });
    </script>
</x-page.sidebar>
