<x-page.sidebar>
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <label for="file">Bestand:</label>
        <input type="file" name="upload" accept="application/pdf, application/vnd.ms-excel, image/png, image/jpeg, image/jpg, image/webp, application/svg, image/gif " /><br>
        @error('upload')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="submit" value="Upload">
        <p>Na het succesvol uploaden van een file kom je weer op deze pagina terecht voor het eventueel uploaden van nog een bestand.</p>
    </form>
</x-page.sidebar>