@extends('layouts.admin')
 
@section('title') Cập nhật nội dung @stop
@section('content')

<div class='col-md-6'>
    @if ($errors->has())
        @foreach ($errors->all() as $error)
            <div class='bg-danger alert'>{{ $error }}</div>
        @endforeach
    @endif
 
    <h2>Cập nhật nội dung</h2>
 
    {!! Form::model($content,['role' => 'form', 'method' => 'PATCH', 'action' => ['AdminController@update', $content->id]]) !!}
 
    <div class='form-group'>
        {!! Form::label('content', 'Nội dung') !!}
        {!! Form::textarea('content', null, ['placeholder' => 'Nội dung', 'class' => 'form-control']) !!}
        <span id="helpBlock" class="help-block">Dùng {hoten} để thay thế Anh/Chị hoặc Ông/Bà</span>
    </div>
 
    <div class='form-group'>
        {!! Form::submit('Cập nhật', ['class' => 'btn btn-primary']) !!}
    </div>
 
    {!! Form::close() !!}
</div>
 
@stop