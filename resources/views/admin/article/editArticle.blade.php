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
			@if($errors->has('TieuDe'))
				<p style="color:red;">{{$errors->first('TieuDe')}}</p>
			@endif
			<label for="">Nội Dung</label>
			<textarea class="form-control" rows="7" cols="30" name='NoiDung'> {{$article->NoiDung}} </textarea>
			@if($errors->has('NoiDung'))
				<p style="color:red;">{{$errors->first('NoiDung')}}</p>
			@endif
			<label for="">Hình ảnh</label>
		 	<input type="file" class="form-control" name="Image" value="$article->Image">
		 	@if($errors->has('Image'))
				<p style="color:red;">{{$errors->first('Image')}}</p>
			@endif
			<label for="">id Thể loại </label>
			<label>Chọn id thể loại</label>
			<select name='idTL' class="form-control" id="categories">
				@foreach($idtheloai as $key=>$value)
					@if($key == $article->idTL) 
						<option value="{{$key}}" selected="selected"> {{$value}} </option>
					@else	
					<option value="{{$key}}">{{$value}}</option>
					@endif
				@endforeach
			</select>
			@if($errors->has('idTL'))
				<p style="color:red;">{{$errors->first('idTL')}}</p>
			@endif
			<label>Chọn id loại tin</label>
				<select name='idLT' class="form-control" id="kind">
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
 @section('script')
  <script type="text/javascript">
  	 $(document).ready(function(){
  	 	$('#categories').change(function(){
  	 		var idTL = $(this).val();
  	 		//ajax handle
  	 		$.get('ajax/category/'+idTL, function(data){
  	 			$('#kind').html(data);
  	 		})
  	 		//alert(idTL);
  	 	})
  	 })
  </script>
 @endsection