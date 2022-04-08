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

<h2 class="text-center mt-5">Contact opnemen</h2>
    <div class="card mx-auto my-5" style="width: 50%">
        <div class="card-body">
            <div class="form-group col-12 p-0">
                @isset($success)
                    <div class="alert alert-success">
                        {{$success}}
                    </div>
                @endisset
            </div>
            <form action="{{route('store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="inputName" class="form-label">Naam</label>
                    <input type="text" name="name" class="form-control" id="nameId" aria-describedby="nameHelp">
                </div>
                <div class="mb-3">
                    <label for="inputEmail" class="form-label">Bericht</label>
                    <textarea type="text" name="message" class="form-control" id="messageId" maxlength="500" aria-describedby="messageHelp"></textarea>
                    <span id="messageHelp" class="form-text">
                      Maximaal 500 karakters.
                    </span>
                </div>
                <div class="col-12 text-center">
                    <button class="btn btn-primary" type="submit">Versturen</button>
                </div>
            </form>
        </div>
    </div>
</x-page.fullwidth>
