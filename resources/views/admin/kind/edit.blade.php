@extends('admin.master')
@section('content')
<div id="page-wrapper">
	<form action="{{route('kinds.update',$kind->id)}}" method="POST" role="form">
		@csrf
		@method('PUT')
		<legend style="text-align: center;">Sửa loại tin</legend>
	
		<div class="form-group">
			<label for="">Tên loại tin</label>
			<input type="text" class="form-control" name='Ten' value="{{$kind->Ten}}">
			@if($errors->has('Ten'))
			<p style="color: red">{{$errors->first('Ten')}}</p>
			@endif
			<label for="">Tên loại tin không dấu</label>
			<input type="text" class="form-control" name='Ten_KhongDau' value="{{$kind->Ten_KhongDau}}">
			@if($errors->has('Ten_KhongDau'))
			<p style="color: red">{{$errors->first('Ten_KhongDau')}}</p>
			@endif
			<label for="">Thứ tự</label>
			<input type="text" class="form-control" name='ThuTu' value="{{$kind->ThuTu}}">
			@if($errors->has('ThuTu'))
			<p style="color: red">{{$errors->first('ThuTu')}}</p>
			@endif

			<label for="">Ẩn hiện </label>
			<input type="text" class="form-control" name='AnHien'value="{{$kind->AnHien}}">
			@if($errors->has('AnHien'))
			<p style="color: red">{{$errors->first('AnHien')}}</p>
			@endif
			<label>Id thể loại</label>
			<select name="idTL">
				@foreach($idtheloai as $key=>$value)
				<option value="{{$key}}">{{$value}}</option>
				@endforeach
			</select>
			@if($errors->has('idTL'))
			<p style="color: red">{{$errors->first('idTL')}}</p>
			@endif
		</div>
	
		<button type="submit" class="btn btn-primary">Cập nhật</button>
	</form>
</div>
 @endsection