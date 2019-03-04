@extends('admin.master')
@section('content')
<div id="page-wrapper">
	<table class="table table-hover">
		<thead>
			<a href="{{route('kinds.create')}}">Thêm loại tin</a>
			<tr>
				<th>id</th>
				<th>Tên </th>
				<th>Tên không dấu</th>
				<th>Thứ tự</th>
				<th>Thể loại</th>
				<th>Action</th>
				<th>Edit</th>
			</tr>
		</thead>
		<tbody>
			@foreach($listKind as $item)
			<tr>
				<td>{{$item->id}}</td>
				<td>{{$item->Ten}}</td>
				<td>{{$item->Ten_KhongDau}}</td>
				<td>{{$item->ThuTu}}</td>
				<td>{{$item->idTL}}</td>
				<td><form action="{{route('kinds.delete',$item->id) }}" method="POST">
							@csrf
							@method('DELETE')
						<button type="submit">Delete</button>
							</form></td>
				<td>
					<a href="{{route('kinds.edit',$item->id)}}">Sửa</a>
				</td>
				</tr>
				
			@endforeach
		</tbody>
	</table>
 </div>
 @endsection