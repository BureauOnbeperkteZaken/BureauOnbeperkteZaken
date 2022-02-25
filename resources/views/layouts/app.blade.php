@include('layouts.page')

@section('content')
    <div class="wrapper">
        <aside>
            @include('layouts.sidebar')
        </aside>
        <main>
            @yield('page-content')
        </main>
    </div>
@show