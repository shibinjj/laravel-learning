@extends('app')
@section('content')
<div class="container">
    <div class="content">
        <div class="title">Name: {!! $name !!}</div>
        <div class="quote"><?php echo "Contact Me: ". $address?></div>
    </div>
</div>
@stop