@extends('admin.master')
@section('content')
<div id="page-wrapper">
	<table class="table table-hover">
		<thead>
			<a href="{{route('article.create')}}">Thêm tin mới</a>
			<tr>
				<th>id</th>
				<th>Tiêu Đề </th>
				<th>Nội Dung</th>
				<th>Hình Ảnh</th>
				<th width="8%">Id Thể Loại</th>
				<th width="8%">Id Loại tin</th>
				<th>Action</th>
				<th>Edit</th>
			</tr>
		</thead>
		<tbody>
			@foreach($listArticle as $item)
			<tr>
				<td>{{$item->id}}</td>
				<td>{{$item->TieuDe}}</td>
				<td>{{$item->NoiDung}}</td>
				<td> <img src="images/{{$item->Image}}" width="100" height="100"> </td>
				<td>{{$item->idLT}}</td>
				<td>{{$item->idTL}}</td>
				<td><form action="{{route('article.delete',$item->id) }}" method="POST">
							@csrf
							@method('DELETE')
						<button type="submit">Delete</button>
							</form></td>
				<td>
					<a href="{{route('article.edit',$item->id)}}">Sửa</a>
				</td>
				</tr>
				
			@endforeach
		</tbody>
	</table>
 </div>
 @endsection