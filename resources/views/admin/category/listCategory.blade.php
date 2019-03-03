@extends('admin.master')
@section('content')
<div id="page-wrapper">
	<table class="table table-hover">
		<thead>
			<a href="{{route('categories.create')}}">Thêm thể loại</a>
			<tr>
				<th>id</th>
				<th>Tên thể loại</th>
				<th>Tên thể loại(không dấu)</th>
				<th>Thứ tự</th>
				<th>Action</th>
				<th>Edit</th>
			</tr>
		</thead>
		<tbody>
			@foreach($listCategory as $item)
			<tr>
				<td>{{$item->id}}</td>
				<td>{{$item->TenTL}}</td>
				<td>{{$item->TenTL_KhongDau}}</td>
				<td>{{$item->ThuTu}}</td>
				<td><form action="{{route('categories.delete',$item->id) }}" method="POST">
							@csrf
							@method('DELETE')
						<button type="submit">Delete</button>
							</form></td>
				<td>
					<a href="{{route('categories.edit',$item->id)}}">Sửa</a>
				</td>
				</tr>
				
			@endforeach
		</tbody>
	</table>
 </div>
 @endsection