<x-page.sidebar>
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <label for="file">Bestand:</label>
        <input type="file" name="upload" accept="application/pdf, application/vnd.ms-excel, image/png, image/jpeg, image/jpg, image/webp, application/svg, image/gif " /><br>
        @error('upload')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="name">Naam:</label>
        <input type="text" id="name" name="name" , value="{{old('name')}}" /><br>
        @error('name')
        <div class=" alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="submit" value="Upload">
    </form>
</x-page.sidebar>