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
            <script>
                let block{{$block->order}} = document.querySelectorAll('.paragraph')[{{$block->order - 1}}];
                block{{$block->order}}.innerHTML += "<div class=\"editor-toolbar\"><button><a href=\"{{route('block.edit', $block->id)}}\">{{ __('edit') }}</a></button></div>"
            </script>
            @endforeach
        </div>
        <div class="flex">
            <button><a href="{{route('block.create', ['template' => $template->id, 'type' => 'paragraph'])}}">Paragraph</a></button>
            <button><a href="{{route('block.create', ['template' => $template->id, 'type' => 'image-paragraph'])}}">Image-paragraph</a></button>
            <button><a href="{{route('block.create', ['template' => $template->id, 'type' => 'paragraph-image'])}}">Paragraph-image</a></button>
            <button><a href="{{route('block.create', ['template' => $template->id, 'type' => 'gallery'])}}">Gallery</a></button>
        </div>
    </div>
</x-page.sidebar>