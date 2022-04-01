<x-page.sidebar>
    <form action="mailto:r.nelemans1@student.avans.nl" method="post" enctype="multipart/form-data">
        @csrf
        <label for="file">Bestand:</label>
        <input type="file" name="upload" accept="application/pdf, application/vnd.ms-excel, image/png, image/jpeg, image/jpg, image/webp, application/svg, image/gif " /><br>
        <label for="name">Naam:</label>
        <input type="text" id="name" name="name" /><br>
        <input type="submit" value="Upload">
    </form>
</x-page.sidebar>