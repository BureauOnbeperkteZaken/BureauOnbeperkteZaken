<style>
  body {
    background: #CAFCED;
    font-family: 'Oswald', sans-serif;
  }

  input, button {
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
</style>
@if($method == 'POST')
<h1>Create {{$type}}</h1>
@endif

@if($method == 'PUT')
<h1 style="text-align:center">Bewerk blok</h1>
@endif

<form action="" method="POST" enctype="multipart/form-data">
  @csrf
  @method($method)
  <div style="display:flex; width:100%; flex-direction:row; justify-content: center">
    <div>
      @if(isset($image))
      <input type="hidden" id="filename" name="filename" value="{{$image->name}}">
      @endif

      @if(isset($block) != null && $block->type != 'paragraph')
      <input id="upload" type="file" name="upload" accept="image/png, image/jpeg, image/jpg, image/webp, image/gif " />
      @endif
      @if(isset($image))
      <img id="preview" style="width:100%" src="http://127.0.0.1:8000/storage/uploads/{{$image->name}}">
      @else
      <img id="preview" style="width:100%">
      @endif
    </div>
    <div>
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