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
    <form action="/panel/new_project" method="post" enctype="multipart/form-data">
        @csrf
        <label for="project_name">Naam van project:</label>
        <input type="text" name="project_name" id="project_name" placeholder="Project X" dusk="title" required><br/>
        <label for="project_description">Beschrijving van project:</label>
        <input type="text" name="project_description" id="project_description" placeholder="Project X is een ..." dusk="project" required><br/>
        <div class="video-container">
            <div class="video-inputs">
                <label for="image_file">Project plaatje:</label>
                <input type="file" id="image_file" name="image_file" dusk="image_file"/><br>
            </div>
            <div class="video-inputs">
                <label for="image_link">Link voor project plaatje:</label>
                <input type="text" id="image_link" name="image_link" dusk="image_link"/>
            </div>
        </div>
        <label>Template:</label>
        <p class="descriptionColor">Klik op 1 plaatje om dat template te selecteren.</p>
        <ul class="select-image-list">
            <li class="select-image-list-item">
                <input type="checkbox" name="template" id="1" value="1" class="select-image-list-item-input">
                <label for="1" class="select-image-list-item-label" dusk="template"><img src="{{asset('img/template_0.png')}}"/></label>
            </li>
            <li class="select-image-list-item">
                <input type="checkbox" name="template" id="2" value="2" class="select-image-list-item-input">
                <label for="2" class="select-image-list-item-label"><img src="{{asset('img/template_1.png')}}"/></label>
            </li>
<!--            <li class="select-image-list-item">
                <input type="checkbox" name="template" id="3" value="3" class="select-image-list-item-input">
                <label for="3" class="select-image-list-item-label"><img src="{{asset('img/template_2.png')}}"/></label>
            </li>
            <li class="select-image-list-item">
                <input type="checkbox" name="template" id="4" value="4" class="select-image-list-item-input">
                <label for="4" class="select-image-list-item-label"><img src="{{asset('img/template_3.png')}}"/></label>
            </li>-->
        </ul>
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

