@extends('admin.master')
@section('content')
<div id="page-wrapper">
	<form action="{{route('categories.update',$category->id)}}" method="POST" role="form">
		@csrf
		@method('PUT')
		<legend style="text-align: center;">Thêm thể loại</legend>
	
		<div class="form-group">
			<label for="">Tên thể loại</label>
			<input type="text" class="form-control" name='TenTL' value="{{$category->TenTL}}">
			<label for="">Tên thể loại không dấu</label>
			<input type="text" class="form-control" name='TenTL_KhongDau' value="{{$category->TenTL_KhongDau}}">
			<label for="">Thứ tự</label>
			<input type="text" class="form-control" name='ThuTu' value="{{$category->ThuTu}}">
			<label for="">Ẩn hiện </label>
			<input type="text" class="form-control" name='AnHien'value="{{$category->AnHien}}">
		</div>
	
		<button type="submit" class="btn btn-primary">Cập nhật</button>
	</form>
</div>
 @endsection