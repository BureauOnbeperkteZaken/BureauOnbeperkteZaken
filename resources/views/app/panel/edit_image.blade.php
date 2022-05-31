<style>
    .video-container {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
    }
    .video-inputs {
        flex: 1
    }
    .descriptionColor {
        color: rgba(0, 0, 0, 0.44);
    }
</style>
<x-page.fullwidth >
    <form action="{{route('panelproject.update.image', $project->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <p class="descriptionColor">Upload een foto bij foto bestand, of plak de foto link bij het veld 'foto link'</p>
        <div class="video-container">
            <div class="video-inputs">
                <label for="image_file">Foto Bestand:</label>
                <input type="file" id="video_file" name="image_file" dusk="image_file"/><br>
            </div>
            <div class="video-inputs">
                <label for="image_link">Video Link:</label>
                <input type="text" id="image_link" name="image_link" dusk="image_link"/>
            </div>
        </div>
        <br/>
        <button type="submit" dusk="submit">Submit</button>
    </form>
</x-page.fullwidth>

