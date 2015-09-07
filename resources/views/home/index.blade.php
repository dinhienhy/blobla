@extends('layouts.layout')
 
@section('title') Obama nói gì về bạn ? @stop
@section('content')

<div class='col-md-8'>
    <div class="check" id="check">
        @if ($errors->has())
            @foreach ($errors->all() as $error)
                <div class='bg-danger alert'>{{ $error }}</div>
            @endforeach
        @endif
     
        <h2 class="text-center">Obama nói gì về bạn?</h2>
        <h3 class="text-center">Nhập thông tin để kiểm tra</h3>
     
        {!! Form::open(['role' => 'form', 'url' => 'check', 'class' => 'form-horizontal' ]) !!}
     
        <div class='form-group'>
            {!! Form::label('full_name', 'Tên của bạn', ['class'=>'col-sm-4 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::text('full_name', null, ['placeholder' => 'Vd: Nguyễn Ngọc Anh', 'class' => 'form-control']) !!}
            </div>
        </div>
     
        <div class='form-group'>
            {!! Form::label('gender', 'Giới tính', ['class'=>'col-sm-4 control-label']) !!}
            <div class="col-sm-2">
                {!! Form::select('gender',[''=>'', 'male' => 'Nam', 'female' => 'Nữ'], null,  ['class' => 'form-control']) !!}
            </div>
        </div>
     
        <div class='form-group'>
            <div class="col-sm-12">
                {!! Form::button('Xem kết quả', ['class' => 'btn btn-success send-btn']) !!}
            </div>
        </div>
     
        {!! Form::close() !!}
    </div>
    <div class="result" id="result" style="display: none;">
        <div class="content-result">
            
        </div>
    </div>
</div>

<script type="text/javascript">
$(document).ready(function(){
  $('.send-btn').click(function(){ 
    $.ajax({
      url: '{{ url('/check') }}',
      type: "post",
      dataType:"json",
      data: {'full_name':$('input[name=full_name]').val(), 'gender': $('select[name=gender]').val(), '_token': $('input[name=_token]').val()},
      success: function(data){
        if(data.status =="success"){
            $('#result .content-result').html(data.msg);
            $('#result').show();
            $('#check').hide();
        }
      }
    });     
  }); 
});
</script>
 
@stop