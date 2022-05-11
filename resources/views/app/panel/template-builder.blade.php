<style>
    .content {
        gap: 80px;
    }
</style>
<x-page.fullwidth :cards="true">
    <div class="editor">
        <div class="content">
            @foreach ($blocks as $block)
            {!! $block->content !!}
            @endforeach
        </div>
        <div class="flex">
            <button><a href="{{route('panelblock.create', ['template' => $block->template_id, 'type' => 'paragraph'])}}">Paragraph</a></button>
            <button><a href="{{route('panelblock.create', ['template' => $block->template_id, 'type' => 'image-paragraph'])}}">Image-paragraph</a></button>
            <button><a href="{{route('panelblock.create', ['template' => $block->template_id, 'type' => 'paragraph-image'])}}">Paragraph-image</a></button>
            <button><a href="{{route('panelblock.create', ['template' => $block->template_id, 'type' => 'gallery'])}}">Gallery</a></button>
        </div>
    </div>
</x-page.sidebar>