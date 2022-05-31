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
    <form action="{{route('panelproject.update.namedesc', $project->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <p class="descriptionColor">Vul de nieuwe naam en/of beschrijving in. (Laat een veld leeg om hem hetzelfde te houden)</p>
        <label for="name">Naam:</label>
        <input type="text" id="name" name="name" dusk="name" value="{{$project->name}}"/><br>
        <label for="desc">Beschrijving:</label>
        <input type="text" id="desc" name="desc" dusk="ndescame" value="{{$project->description}}"/><br>

        <br/>
        <button type="submit" dusk="submit">Submit</button>
    </form>
</x-page.fullwidth>

