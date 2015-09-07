<!-- resources/views/auth/login.blade.php -->

@extends('layouts.master')
 
@section('title') Đăng nhập @stop
 
@section('content')
 
<div class='col-lg-4 col-lg-offset-4'>
 
    @if ($errors->has())
        @foreach ($errors->all() as $error)
            <div class='bg-danger alert'>{{ $error }}</div>
        @endforeach
    @endif
 
    <h1><i class='fa fa-lock'></i> Đăng nhập</h1>
 
    {!! Form::open(['role' => 'form']) !!}
 
    <div class='form-group'>
        {!! Form::label('email', 'Email') !!}
        {!! Form::text('email', null, ['placeholder' => 'Email', 'class' => 'form-control']) !!}
    </div>
 
    <div class='form-group'>
        {!! Form::label('password', 'Password') !!}
        {!! Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control']) !!}
    </div>
 
    <div class='form-group'>
        {!! Form::submit('Đăng nhập', ['class' => 'btn btn-primary']) !!}
    </div>
 
    {!! Form::close() !!}
 
</div>
 
@stop