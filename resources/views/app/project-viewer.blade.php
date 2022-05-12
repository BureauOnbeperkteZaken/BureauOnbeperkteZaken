<style>
    .content {
        gap: 80px;
    }
</style>
<x-page.fullwidth :cards="true">

    <x-slot:background>
    <iframe id="amongus" type="text/html" title="Vimeo player"
        src="{{ $videoLink }}" allowfullscreen></iframe>
    </x-slot:background>

    <div class="editor">
        <div class="content">
            @foreach ($blocks as $block)
            {!! $block->content !!}
            @endforeach
        </div>
    </div>
    </x-page.sidebar>