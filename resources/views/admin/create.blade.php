@extends('layouts.admin')
 
@section('title') Thêm nội dung @stop
@section('content')

<div class='col-md-6'>
    @if ($errors->has())
        @foreach ($errors->all() as $error)
            <div class='bg-danger alert'>{{ $error }}</div>
        @endforeach
    @endif
 
    <h2>Thêm mới nội dung</h2>
 
    {!! Form::open(['role' => 'form', 'url' => 'admin']) !!}
 
    <div class='form-group'>
        {!! Form::label('content', 'Nội dung') !!}
        {!! Form::textarea('content', null, ['placeholder' => 'Nội dung', 'class' => 'form-control']) !!}
        <span id="helpBlock" class="help-block">Dùng {hoten} để thay thế Anh/Chị hoặc Ông/Bà</span>
    </div>
 
    <div class='form-group'>
        {!! Form::submit('Thêm mới', ['class' => 'btn btn-primary']) !!}
    </div>
 
    {!! Form::close() !!}
</div>
 
@stop