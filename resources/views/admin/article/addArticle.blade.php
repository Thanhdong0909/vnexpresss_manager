@extends('admin.master')
@section('content')
<div id="page-wrapper">
	<form action="{{route('article.store')}}" enctype="multipart/form-data" method="POST" role="form" >
		@csrf
		<legend style="text-align: center;">Thêm loại tin</legend>
	
		<div class="form-group">
			<label for="">Tiêu Đề</label>
			<input type="text" class="form-control" name='TieuDe' >
			<label for="">Nội Dung</label>
			<textarea class="form-control" rows="7" cols="30" name='NoiDung'> </textarea>
			<label for="">Hình ảnh</label>
		 	<input type="file" class="form-control" name="Image">
			<label for="">id Thể loại </label>
			<label>Chọn id thể loại</label>
			<select name='idTL' class="form-control">
				@foreach($idtheloai as $key=>$value)
				<option value="{{$key}}">{{$value}}</option>
				@endforeach
			</select>
			<label>Chọn id loại tin</label>
				<select name='idLT' class="form-control">
				@foreach($idloaitin as $key=>$value)
				<option value="{{$key}}">{{$value}}</option>
				@endforeach
			</select>

		</div>
	
		<button type="submit" class="btn btn-primary">Thêm</button>
	</form>
</div>
 @endsection