@extends('app')
@section('content')
    <div class="container">
        <div class="content">
            <div class="title">
                <h2>PHP Developers</h2>
            </div>
            <div class="quote">
                @if (count($people))
                    <ul>
                    @foreach($people as $person)
                        <li>{{$person}}</li>
                    @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
@stop