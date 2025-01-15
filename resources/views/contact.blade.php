@extends('layout')
@section('content')
<h1>Contact Page</h1>
@foreach ($data as $key => $value)
    {{ $key." = ".$value }}
@endforeach
@endsection
