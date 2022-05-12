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
    </div>
</x-page.sidebar>