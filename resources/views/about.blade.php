@extends('layout')
@section('content')
<h1>About Page</h1>
@foreach ($data as $key => $value)
    {{ $key." = ".$value }}
@endforeach
@endsection
