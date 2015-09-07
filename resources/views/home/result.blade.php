@extends('layouts.layout')
 
@section('title') Obama nói gì về bạn ? @stop
@section('content')

<div class='col-md-8'>
    <div class="result">
        <div class="content-result">
            {!! $data !!}
        </div>
    </div>
</div>
 
@stop