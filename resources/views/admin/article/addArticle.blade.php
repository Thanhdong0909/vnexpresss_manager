@extends('admin.master')
@section('content')
<div id="page-wrapper">
	<form action="{{route('article.store')}}" enctype="multipart/form-data" method="POST" role="form" >
		@csrf
		<legend style="text-align: center;">Thêm loại tin</legend>
	
		<div class="form-group">
			<label for="">Tiêu Đề</label>
			<input type="text" class="form-control" name='TieuDe' >
			@if($errors->has('TieuDe'))
				<p style="color:red;">{{$errors->first('TieuDe')}}</p>
			@endif
			<label for="">Nội Dung</label>
			<textarea class="form-control" rows="7" cols="30" name='NoiDung'> </textarea>
			@if($errors->has('NoiDung'))
				<p style="color:red;">{{$errors->first('NoiDung')}}</p>
			@endif
			<label for="">Hình ảnh</label>
		 	<input type="file" class="form-control" name="Image">
		 	@if($errors->has('Image'))
				<p style="color:red;">{{$errors->first('Image')}}</p>
			@endif
			<label for=""> Thể loại </label>
		
			<select name='idTL' class="form-control" id="categogy">
				@foreach($idtheloai as $value)
				<option value="{{$value->id}}">{{$value->TenTL}}</option>
				@endforeach
			</select>
			@if($errors->has('idTL'))
				<p style="color:red;">{{$errors->first('idTL')}}</p>
			@endif
			<label>Loại tin</label>
				<select name='idLT' class="form-control" id="kind">
				@foreach($idloaitin as $value)
				<option value="{{$value->id}}">{{$value->Ten}}</option>
				@endforeach
			</select>

		</div>
	
		<button type="submit" class="btn btn-primary">Thêm</button>
	</form>
</div>
 @endsection
 @section('script')
   <script type="text/javascript">
   	 $(document).ready(function(){
   	 		$('#categogy').change(function(){
   	 			var categoryid = $(this).val(); // get id cate
   	 			$.get('ajax/category/'+categoryid, function(data){
   	 				$('#kind').html(data);
   	 			})
   	 		});
   	 });
   </script>
 @endsection