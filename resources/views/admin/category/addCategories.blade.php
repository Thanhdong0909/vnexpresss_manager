@extends('admin.master')
@section('content')
<div id="page-wrapper">
	<form action="{{route('categories.store')}}" method="POST" role="form">
		@csrf
		<legend style="text-align: center;">Thêm thể loại</legend>
	
		<div class="form-group">
			<label for="">Tên thể loại</label>
			<input type="text" class="form-control" name='TenTL' >
			@if($errors->has('TenTL'))
			<p style="color: red">{{$errors->first('TenTL')}}</p>
			@endif
			<label for="">Tên thể loại không dấu</label>
			<input type="text" class="form-control" name='TenTL_KhongDau'>
			@if($errors->has('TenTL_KhongDau'))
			<p style="color: red">{{$errors->first('TenTL_KhongDau')}}</p>
			@endif
			<label for="">Thứ tự</label>
			<input type="text" class="form-control" name='ThuTu' >
			@if($errors->has('ThuTu'))
			<p style="color: red">{{$errors->first('ThuTu')}}</p>
			@endif
			<label for="">Ẩn hiện </label>
			<input type="text" class="form-control" name='AnHien' >
			@if($errors->has('AnHien'))
			<p style="color: red">{{$errors->first('AnHien')}}</p>
			@endif
		</div>
	
		<button type="submit" class="btn btn-primary">Thêm</button>
	</form>
</div>
 @endsection