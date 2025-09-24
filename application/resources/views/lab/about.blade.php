@extends('layouts.app')
@section('content')
    <h1>About</h1>
    @if ($mode)
        <p>Mode: {{ $mode }}</p>
    @else
        <p>No mode</p>
    @endif
@endsection
