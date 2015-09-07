@extends('layouts.admin')
 
@section('title') Admin @stop
@section('content')

<div class='col-md-12'>
    <a class="btn btn-primary" href="{!! URL::to('admin/add') !!}">Thêm mới</a>
    <h2>Quản lý nội dung</h2>
    <table class="table table-bordered">
        <thead>
            <th class="text-center">Nội dung</th>
            <th class="text-center">Sửa | Xóa</th>
        </thead>
        <tbody>
            @foreach($datas as $data)
                <tr>
                    <td>{!!$data->content!!}</td>
                    <td class="text-center">
                        <a class="btn btn-info" href="{!! URL::to('admin' ) !!}/{!! $data->id !!}/edit" role="button">Sửa</a> 
                        <button class="btn btn-danger delete-btn" data-id="{!! $data->id !!}" role="button">Xóa</button>
                    </td>
                </tr>
        	@endforeach
        </tbody>
    </table>
</div>
<script type="text/javascript">
$(document).ready(function(){
  $('.delete-btn').click(function(){ 
    if (confirm("Are you sure?")) {
        // your deletion code
        var dataId = $(this).attr('data-id');
        //alert(dataId);
        $.ajax({
          url: '{{ url('admin/delete') }}',
          type: "post",
          dataType:"json",
          data: {'id':dataId,'_token': '{{ csrf_token() }}'},
          success: function(data){
            console.log(data);
            if(data.status =="success"){
                setInterval(function() {
                    window.location.reload();
                }, 1000);
            }
          }
        }); 
    }
    return false;     
  }); 
});
</script>
@stop