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
    <form action="{{route('panelproject.update.video', $project->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <p class="descriptionColor">Upload een video bij video bestand en geef deze een naam, of plak de videolink bij het veld 'video link'</p>
        <div class="video-container">
            <div class="video-inputs">
                <label for="video_file">Video Bestand:</label>
                <input type="file" id="video_file" name="video_file" dusk="video"/><br>
                <label for="video_name">Video Naam:</label>
                <input type="text" id="video_name" name="video_name" dusk="video_name"/><br>
            </div>
            <div class="video-inputs">
                <label for="video_link">Video Link:</label>
                <input type="text" id="video_link" name="video_link" dusk="video_link"/>
            </div>
        </div>
        <br/>
        <button type="submit" dusk="submit">Submit</button>
    </form>
</x-page.fullwidth>

