@extends('app')
@section('content')
    {!! Form::open(array('url' => 'getName')) !!}
    {!! Form::label('name', 'Your Name') !!}
    {!! Form::text('name')  !!}
    {!! Form::submit('Click Me!')  !!}
    {!! Form::close() !!}
@endsection