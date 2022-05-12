<x-page.fullwidth >
    <form action="/panel/new_project" method="post" enctype="multipart/form-data">
        @csrf
        <label for="title">Naam van project:</label>
        <input type="text" name="title" id="title" placeholder="Project X" dusk="title" required><br/>
        <label>Template:</label>
        <ul class="select-image-list">
            <li class="select-image-list-item">
                <input type="checkbox" name="template" id="1" value="1" class="select-image-list-item-input">
                <label for="1" class="select-image-list-item-label" dusk="template"><img src="{{asset('img/template_0.png')}}"/></label>
            </li>
            <li class="select-image-list-item">
                <input type="checkbox" name="template" id="2" value="2" class="select-image-list-item-input">
                <label for="2" class="select-image-list-item-label"><img src="{{asset('img/template_1.png')}}"/></label>
            </li>
            <li class="select-image-list-item">
                <input type="checkbox" name="template" id="3" value="3" class="select-image-list-item-input">
                <label for="3" class="select-image-list-item-label"><img src="{{asset('img/template_2.png')}}"/></label>
            </li>
            <li class="select-image-list-item">
                <input type="checkbox" name="template" id="4" value="4" class="select-image-list-item-input">
                <label for="4" class="select-image-list-item-label"><img src="{{asset('img/template_3.png')}}"/></label>
            </li>
        </ul>
        <label for="video_file">Video Bestand:</label>
        <input type="file" id="video_file" name="video_file" dusk="video"/><br>
        <label for="video_name">Video Naam:</label>
        <input type="text" id="video_name" name="video_name" dusk="video_name"/><br>
        <button type="submit" dusk="submit">Submit</button>
    </form>
</x-page.fullwidth>

