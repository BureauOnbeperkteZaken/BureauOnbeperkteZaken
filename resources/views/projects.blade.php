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

    <h1 class="text-center mt-5">Projecten</h1>
    <hr class="plan-hr">
    <div class="project-container">
        @foreach($projects as $project)
            <div class="project-card">
                <!-- show image from $project->image_path as header image           -->
                <img src="{{ $project->image_path }}" alt="{{ $project->name }} Image">
                <div class="descriptionContainer">
                    <h1 class="card-title">{{ $project->name }}</h1>
                    <p class="card-text">{{ $project->description }}</p>
                    <a href="{{ route('project.view', $project->id) }}" class="btn btn-primary" dusk="project_view-{{$project->id}}">Bekijk project</a>
                </div>
            </div>
        @endforeach
    </div>
</x-page.fullwidth>
