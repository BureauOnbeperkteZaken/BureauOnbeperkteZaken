<?PHP
$docs_version = explode('.', Illuminate\Foundation\Application::VERSION)[0] . ".x";
?>

<x-page.fullwidth>

    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        </head>
        <x-slot name="header">
        <h2>
                {{ __('Dashboard') }}
            </h2>
        </x-slot>
        
        
        <h2 class="text-left mt-5">Ideeënmakers</h2>
        <label for="1" class="text-center" dusk="template"><img src="{{asset('img/Jojo_placeholder.jpg')}}"/></label>
</x-page.fullwidth>