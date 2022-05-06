@if($method == 'POST')
  <h1>Create {{$type}}</h1>
@endif

<form action="" method="POST" enctype="multipart/form-data">
  @csrf
  @method($method)
  <!-- Include stylesheet -->
  <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

  <!-- Create the editor container -->
  <button id="submit" type="submit">Upload</button>
  <select id="language_code" name="language_code" required>
    @foreach($languages as $language)
    <option value="{{ $language->code }}" @if($language->code == $template->language_code)
      selected
      @endif
      >{{ $language->name }}</option>
    @endforeach
  </select>
  <div id="editor">
  </div>
  <input type="hidden" id="id" name="id" value="{{$template->id}}">
  <input type="hidden" id="content" name="content" value="">
  <input type="hidden" id="type" name="type" value="{{isset($type) || ''}}">
@if(isset($image))
  <input type="hidden" id="filename" name="filename" value="{{$image->name}}">
@endif
  <input id="upload" type="file" name="upload" accept="image/png, image/jpeg, image/jpg, image/webp, image/gif " />
</form>
@if(isset($image))
  <img id="preview" style="width:100%" src="http://127.0.0.1:8000/storage/uploads/{{$image->name}}">
@endif

<!-- Include the Quill library -->
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<!-- Initialize Quill editor -->
<script>
  var quill = new Quill('#editor', {
    modules: {
      toolbar: [
        [{
          header: [1, 2, false]
        }],
        ['bold', 'italic', 'underline'],
        ['image', 'code-block']
      ]
    },
    placeholder: 'Compose an epic...',
    theme: 'snow' // or 'bubble'
  });
  var btn = document.getElementById('submit');
  btn.addEventListener('click', function() {
    var content = quill.root.innerHTML;
    console.log(content);
    var contentElement = document.getElementById('content');
    contentElement.value = content;
  });
  var imageUploader = document.getElementById('upload');
  var preview = document.getElementById('preview');
  imageUploader.onchange = evt => {
    const [file] = imageUploader.files
    if (file) {
      preview.src = URL.createObjectURL(file)
    }
  }
</script>

@if (isset($block) && $block)
<script>
  var text = '{!! $block->content!!}';
  console.log(text);
  quill.root.innerHTML = text;
</script>
@endif