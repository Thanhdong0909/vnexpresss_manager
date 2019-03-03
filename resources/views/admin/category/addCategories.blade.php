@extends('admin.master')
@section('content')
<div id="page-wrapper">
	<form action="{{route('categories.store')}}" method="POST" role="form">
		@csrf
		<legend style="text-align: center;">Thêm thể loại</legend>
	
		<div class="form-group">
			<label for="">Tên thể loại</label>
			<input type="text" class="form-control" name='TenTL' >
			<label for="">Tên thể loại không dấu</label>
			<input type="text" class="form-control" name='TenTL_KhongDau'>
			<label for="">Thứ tự</label>
			<input type="text" class="form-control" name='ThuTu' >
			<label for="">Ẩn hiện </label>
			<input type="text" class="form-control" name='AnHien' >
		</div>
	
		<button type="submit" class="btn btn-primary">Thêm</button>
	</form>
</div>
 @endsection