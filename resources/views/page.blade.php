@extends('layouts.master')

@section('title', 'Page Title')

@yield('sidebar')
    

    <p>This is appended to the master sidebar.</p>


@section('content')
<h2>{{$name}}</h2>
    <p>This is my body content.</p>
@endsection