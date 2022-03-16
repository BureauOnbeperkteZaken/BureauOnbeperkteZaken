@extends('layouts.app', ['title' => 'Home'])

@section('main')
<link rel="stylesheet" href="onbeperkt-anders.css">
<div class="topnav">
    <a class="active" href="/">Home</a>
    <a href="/onbeperkt-anders">Project Oberperkt Anders</a>
</div>
<p>Dit is de main content</p>
@endsection

@section('sidebar')
<p>Dit is een sidebar</p>
@endsection