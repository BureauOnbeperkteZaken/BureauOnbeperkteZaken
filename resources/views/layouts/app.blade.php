@extends('layouts.page')

@section('content')
    <div class="wrapper">
        <aside>
            @yield('sidebar')
        </aside>
        <main>
            @yield('main')
        </main>
    </div>
@endsection