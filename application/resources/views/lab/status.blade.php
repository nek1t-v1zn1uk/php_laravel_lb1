@extends('layouts.app')
@section('content')
    <h1>Status</h1>
    @foreach ($logs as $log)
        {{ $log }}<br>
    @endforeach
@endsection
