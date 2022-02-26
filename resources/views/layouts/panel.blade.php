@extends('layouts.page', ['titlebase' => 'BOZ Admin'])

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