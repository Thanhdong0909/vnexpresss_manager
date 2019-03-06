@extends('admin.master')
@section('content')
<div id="page-wrapper">
	<h1 style="text-align: center;">Welcome to admin page</h1>
	@if(Auth::check())
	<h2 style="text-align: center;">Xin mời <a href="{{route('get.login')}}">Đăng nhập</a> </h2>
	@endif
 </div>
 @endsection