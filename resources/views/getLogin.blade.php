@extends('admin.master')
@section('content')
<div id="page-wrapper">
	<form action="{{route('login.postLogin')}}" method="POST" role="form">
		@csrf
		<legend>Đăng nhập</legend>
	
		<div class="form-group">
			@if($errors->has('ErrorLogin'))
				<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					{{$errors->first('ErrorLogin')}}
				</div>
			@endif
			<label for="">username</label>
			<input type="text" class="form-control" id="" placeholder="Nhập email" name="email">
			@if($errors->has('email'))
				<p style="color: red">{{$errors->first('email')}}</p>
			@endif
			<label for="">password</label>
			<input type="password" class="form-control" id="" placeholder="Nhập password" name="password">
			@if($errors->has('password'))
				<p style="color: red">{{$errors->first('password')}}</p>
			@endif
		</div>
	
		<button type="submit" class="btn btn-primary">Đăng nhập</button>
	</form>
</div>
 @endsection
