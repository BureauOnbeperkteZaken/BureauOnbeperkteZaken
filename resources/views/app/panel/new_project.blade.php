<x-page.sidebar>
    <form action="/panel/new_project" method="post" enctype="multipart/form-data">
        @csrf
        <label for="video_file">Video Bestand:</label>
        <input type="file" id="video_file" name="video_file"/><br>
        <label for="video_name">Video Naam:</label>
        <input type="text" id="video_name" name="video_name"/><br>
        <button type="submit">Submit</button>
    </form>
</x-page.sidebar>

