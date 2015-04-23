@extends('app')
@section('content')
    <div>
        <h2>Hello {{ $name }}</h2>
        <p>Passing variables from controller to View</p>
    </div>
@endsection