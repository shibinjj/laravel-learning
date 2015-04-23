@extends('app')
@section('content')

<div class="container">
    <div class="title"><h1>{{ $heading }}</h2></div>
    <div class="content">
        <div class="quote">{{$content}}</div>
    </div>
</div>

@endsection
