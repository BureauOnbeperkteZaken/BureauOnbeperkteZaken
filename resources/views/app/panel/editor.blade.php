<style>
  body {
    background: #CAFCED;
    font-family: 'Oswald', sans-serif;
  }

  button,
  .epic {
    position: relative;
    text-decoration: none;
    color: black;
    padding: 14px 18px;
    background-color: #50C9A3;
    font-family: 'Oswald', sans-serif;
    font-weight: bold;
    box-sizing: content-box;
    border: none;
    cursor: pointer;
  }

  #editor {
    background-color: white;
  }
</style>
@if($method == 'POST')
<h1 style="text-align:center">Aanmaken van een blok</h1>
@endif

@if($method == 'PUT')
<h1 style="text-align:center">Bewerk blok</h1>
@endif

<form action="" method="POST" enctype="multipart/form-data">
  @csrf
  @method($method)
  <div style="display:flex; width:100%; flex-direction:row; justify-content: center; flex-grow: 0; gap: 100px">
    @if($type != 'paragraph')
    <div style="display: flex; width: 80%;flex-direction: column;">
      @if(isset($image))
      <input type="hidden" id="mediaId" name="mediaId" value="{{$media->id}}">
      <input type="hidden" id="imageId" name="imageId" value="{{$image->id}}">
      <input type="hidden" id="filename" name="filename" value="{{$media->filename}}">
      @endif

      @if(!isset($block) || $block->type != 'paragraph')
      <div class="epic">
        <label for="file">Klik hier om je afbeelding te uploaden</label>
        <input id="upload" type="file" name="upload" accept="image/png, image/jpeg, image/jpg, image/webp, image/gif " style="align-self: center; opacity: 0; position: absolute; top: 0;left: 0;height: 100%;width: 100%;cursor: pointer;" />
      </div>
      @if (isset($image))
      <input type="text" id="alt" name="alt" placeholder="Type hier je vervangende tekst in voor als de afbeelding niet inlaad" value="{{$image->alt}}">
      @else
      <input type="text" id="alt" name="alt" placeholder="Type hier je vervangende tekst in voor als de afbeelding niet inlaad">
      @endif
      @endif
      @if(isset($image))
      <div>
        <h2>Voorbeeld van de afbeelding:</h2>
        <div style="width: 80%">
          <img id="preview" style="width:100%; height: 100%" src="http://127.0.0.1:8000/storage/uploads/{{$media->filename}}" alt="{{$image->alt}}">
        </div>
      </div>
      @else
      <div>
        <h2>Voorbeeld van de afbeelding</h2>
        <div style="width: 80%">
          <img id="preview" style="width:100%; height: 100%">
        </div>
      </div>
      @endif
    </div>
    @endif
    <div style="width:100%;">
      <!-- Include stylesheet -->
      <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

      <!-- Create the editor container -->
      <div style="display: flex; justify-content: center;">
        <button id="submit" type="submit">Opslaan</button>
      </div>
      <!-- <select id="language_code" name="language_code" required>
        @foreach($languages as $language)
        <option value="{{ $language->code }}" @if($language->code == $project->language_code)
          selected
          @endif
          >{{ $language->name }}</option>
        @endforeach
      </select> -->
      <div id="editor">
      </div>
      <input type="hidden" id="id" name="id" value="{{$project->id}}">
      <input type="hidden" id="content" name="content" value="">
      @if(isset($block))
      <input type="hidden" id="type" name="type" value="{{$block->type}}">
      @else
      <input type="hidden" id="type" name="type" value="{{isset($type) ? $type : ''}}">
      @endif
    </div>
  </div>
</form>

<!-- Include the Quill library -->
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<!-- Initialize Quill editor -->
<script>
  var toolbarOptions = [
    ['bold', 'italic', 'underline', 'strike'], // toggled buttons
    ['blockquote'],

    [{
      'header': 1
    }, {
      'header': 2
    }], // custom button values
    [{
      'list': 'ordered'
    }, {
      'list': 'bullet'
    }],
    [{
      'script': 'sub'
    }, {
      'script': 'super'
    }], // superscript/subscript
    [{
      'indent': '-1'
    }, {
      'indent': '+1'
    }], // outdent/indent
    [{
      'size': ['small', false, 'large', 'huge']
    }], // custom dropdown
    [{
      'header': [1, 2, 3, 4, 5, 6, false]
    }],

    [{
      'color': []
    }, {
      'background': []
    }], // dropdown with defaults from theme
    [{
      'font': []
    }],
    [{
      'align': []
    }],

    ['clean'] // remove formatting button
  ];
  var quill = new Quill('#editor', {
    modules: {
      toolbar: toolbarOptions
    },
    placeholder: 'Vul hier je tekst in',
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