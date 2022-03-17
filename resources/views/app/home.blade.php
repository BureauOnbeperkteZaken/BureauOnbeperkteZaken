<x-page.sidebar>
    <x-slot:background>
        <iframe id="ytplayer" type="text/html" title="Vimeo player"
                src="@isset($videoLink){{ $videoLink }} @else https://player.vimeo.com/video/188017888?h=dc7d85e4c7' @endisset"></iframe>
    </x-slot:background>
    <h5>Test h6</h5>
    <h1>Test</h1>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nisi nulla, venenatis in nibh in, malesuada luctus eros. Donec blandit auctor quam at eleifend. In nibh velit, ultrices quis convallis id, mattis id enim. Sed sodales mi eu arcu auctor finibus. Morbi mi sapien, fermentum ut orci sit amet, accumsan lacinia dolor. Vestibulum efficitur vel odio eu aliquet. Ut non dictum sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum imperdiet sem vulputate tristique auctor. Ut sollicitudin tortor eu nibh feugiat, id ultrices arcu porttitor. Donec imperdiet metus id massa ultricies efficitur. Suspendisse non elit in orci elementum varius. Fusce nec volutpat elit.
    </p>
    <x-slot:sidebar>
        <h2>Sidebar</h2>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nisi nulla, venenatis in nibh in, malesuada luctus eros. Donec blandit auctor quam at eleifend. In nibh velit, ultrices quis convallis id, mattis id enim. Sed sodales mi eu arcu auctor finibus. Morbi mi sapien, fermentum ut orci sit amet, accumsan lacinia dolor. Vestibulum efficitur vel odio eu aliquet. Ut non dictum sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum imperdiet sem vulputate tristique auctor. Ut sollicitudin tortor eu nibh feugiat, id ultrices arcu porttitor. Donec imperdiet metus id massa ultricies efficitur. Suspendisse non elit in orci elementum varius. Fusce nec volutpat elit.
        </p>
    </x-slot:sidebar>
</x-page.sidebar>
