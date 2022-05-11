    <?PHP
    $docs_version = explode('.', Illuminate\Foundation\Application::VERSION)[0] . ".x";
    ?>

    <x-page.fullwidth>

        <head>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        </head>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>

        <h2 class="text-center mt-5">Metadata aanpassen</h2>
        <div class="card mx-auto my-5" style="width: 50%">
            <div class="card-body">
                <div class="form-group col-12 p-0">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </div>
                    @endif
                    @isset($success)
                        <div class="alert alert-success">
                            {{$success}}
                        </div>
                    @endisset
                </div>
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if(!empty($url))
                    <div class="mb-3">
                        <label for="inputUrl" class="form-label">Aan te passen pagina</label>
                        <input name='url' type="text" id="urlInput" class="form-control" value="{{$url}}" readonly>
                        <label for="inputTitle" class="form-label">Titel</label>
                        <input name="title" class="form-control" id="inputTitle" aria-describedby="titleHelp">
                        <div class="form-text">Titel die in de tab van de browser komt te staan</div>
                        <label for="inputDescription" class="form-label">Beschrijving</label>
                        <textarea name="description" type="text" class="form-control" id="inputDescription" aria-describedby="messageHelp"></textarea>
                        <div class="form-text">Beknopte beschrijving van pagina die bij de zoekresultaten komt te staan</div>
                        <div class="form-text">Max 155 karakters.</div>
                    </div>
                    <div class="col-12 text-center">
                        <button class="btn btn-success" type="submit">Opslaan</button>
                    </div>
                    @endif
                </form>
            </div>
        </div>
    </x-page.fullwidth>
