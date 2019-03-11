@extends('admin.master')
@section('content')
<div id="page-wrapper">
	<form action="{{route('kinds.store')}}" method="POST" role="form">
		@csrf
		<legend style="text-align: center;">Thêm loại tin</legend>
	
		<div class="form-group">
			<label for="">Tên loại tin</label>
			<input type="text" class="form-control" name='Ten' >
			@if($errors->has('Ten'))
			<p style="color: red">{{$errors->first('Ten')}}</p>
			@endif
			<label for="">Tên loại tin không dấu</label>
			<input type="text" class="form-control" name='Ten_KhongDau'>
			@if($errors->has('Ten_KhongDau'))
			<p style="color: red">{{$errors->first('Ten_KhongDau')}}</p>
			@endif
			<label for="">Thứ tự</label>
			<input type="text" class="form-control" name='ThuTu' >
			@if($errors->has('ThuTu'))
			<p style="color: red">{{$errors->first('ThuTu')}}</p>
			@endif
			<label for="">Ẩn hiện </label>
			<input type="text" class="form-control" name='AnHien'>
			@if($errors->has('AnHien'))
			<p style="color: red">{{$errors->first('AnHien')}}</p>
			@endif
			<label>Chọn id thể loại</label>
			<select name="idTL">
				@foreach($idtheloai as $key=>$value)
				<option value="{{$key}}">{{$value}}</option>
				@endforeach
			</select>
			@if($errors->has('idTL'))
			<p style="color: red">{{$errors->first('idTL')}}</p>
			@endif
		</div>
	
		<button type="submit" class="btn btn-primary">Thêm</button>
	</form>
</div>
 @endsection