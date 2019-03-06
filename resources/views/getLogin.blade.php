@extends('admin.master')
@section('content')
<div id="page-wrapper">
	<form action="{{route('login.postLogin')}}" method="POST" role="form">
		@csrf
		<legend>Đăng nhập</legend>
	
		<div class="form-group">
			<label for="">username</label>
			<input type="text" class="form-control" id="" placeholder="Nhập username" name="username">
			<label for="">password</label>
			<input type="password" class="form-control" id="" placeholder="Nhập password" name="password">
		</div>
	
		<button type="submit" class="btn btn-primary">Đăng nhập</button>
	</form>
</div>
 @endsection
