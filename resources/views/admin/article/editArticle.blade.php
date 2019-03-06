@extends('admin.master')
@section('content')
<div id="page-wrapper">
	<form action="{{route('article.update', $article->id)}}" enctype="multipart/form-data" method="POST" role="form" >
		@csrf
		@method('PUT')
		<legend style="text-align: center;">Sửa loại tin</legend>
	
		<div class="form-group">
			<label for="">Tiêu Đề</label>
			<input type="text" class="form-control" name='TieuDe' value="{{$article->TieuDe}}">
			<label for="">Nội Dung</label>
			<textarea class="form-control" rows="7" cols="30" name='NoiDung'> {{$article->NoiDung}} </textarea>
			<label for="">Hình ảnh</label>
		 	<input type="file" class="form-control" name="Image" value="$article->Image">
			<label for="">id Thể loại </label>
			<label>Chọn id thể loại</label>
			<select name='idTL' class="form-control">
				@foreach($idtheloai as $key=>$value)
					@if($key == $article->idTL) 
						<option value="{{$key}}" selected="selected"> {{$value}} </option>
					@else	
					<option value="{{$key}}">{{$value}}</option>
					@endif
				@endforeach
			</select>
			<label>Chọn id loại tin</label>
				<select name='idLT' class="form-control">
				@foreach($idloaitin as $key=>$value)
					@if($key == $article->idLT)
						<option value="{{$key}}" selected="selected">{{$value}}</option>
					@else
					    <option value="{{$key}}">{{$value}}</option>
					@endif
				@endforeach
			</select>

		</div>
	
		<button type="submit" class="btn btn-primary">Cập nhật</button>
	</form>
</div>
 @endsection