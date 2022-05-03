<x-page.fullwidth :cards="true">
    <div class="editor">
        <div class="content">
            @foreach ($blocks as $block)
            {!! $block->content !!}
            <script>
                let paragraph{{$block->order}} = document.querySelectorAll('.paragraph')[{{$block->order - 1}}];
                paragraph{{$block->order}}.innerHTML += "<div class=\"editor-toolbar\"><button><a href=\"{{route('block.edit', $block->order)}}\">{{ __('edit') }}</a></button></div>"
            </script>
            @endforeach
        </div>
    </div>
    <hr data-title="{{ __('gallery') }}" />
    <div class="gallery">
        <div class="photo">
            <img src="https://www.kidsproof.nl/images/Image350_235/browniesendownies_browniesendownies_3_350_235.jpg" />
            <div class="details">
                <span property="name">Brownies en downies</span>
                <span property="date">Datum</span>
            </div>
        </div>
        <div class="photo">
            <img src="https://media.prdn.nl/retailtrends/images/brownies%26downies%282%29.jpg?w=850" />
            <div class="details">
                <span property="name">Foto van iets</span>
                <span property="date">Datum</span>
            </div>
        </div>
        <div class="photo">
            <img src="https://sleutelstad.nl/wp-content/uploads/2020/05/022020-Summer-en-Erwin-2-1800x900.jpg" />
            <div class="details">
                <span property="name">Foto van iets</span>
                <span property="date">Datum</span>
            </div>
        </div>
        <div class="photo">
            <img src="https://denationalefranchisegids.nl/wp-content/uploads/2020/04/Brownies_en_Downies_Franchise.jpg" />
            <div class="details">
                <span property="name">Foto van iets</span>
                <span property="date">Datum</span>
            </div>
        </div>
    </div>
    </x-page.sidebar>