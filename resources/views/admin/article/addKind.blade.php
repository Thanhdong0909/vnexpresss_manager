@extends('admin.master')
@section('content')
<div id="page-wrapper">
	<form action="{{route('kinds.store')}}" method="POST" role="form">
		@csrf
		<legend style="text-align: center;">Thêm loại tin</legend>
	
		<div class="form-group">
			<label for="">Tên loại tin</label>
			<input type="text" class="form-control" name='Ten' >
			<label for="">Tên loại tin không dấu</label>
			<input type="text" class="form-control" name='Ten_KhongDau'>
			<label for="">Thứ tự</label>
			<input type="text" class="form-control" name='ThuTu' >
			<label for="">Ẩn hiện </label>
			<input type="text" class="form-control" name='AnHien' >
			<label>Chọn id thể loại</label>
			<select name="idTL">
				@foreach($idtheloai as $key=>$value)
				<option value="{{$key}}">{{$value}}</option>
				@endforeach
			</select>
		</div>
	
		<button type="submit" class="btn btn-primary">Thêm</button>
	</form>
</div>
 @endsection