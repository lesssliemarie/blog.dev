@extends('layouts.master')

@section('content')
	<h1 class="cursive">Create a New Post</h1>
	<hr>
	<form role="form" method="POST" action="{{{ action('PostsController@store') }}}">
		<div class="form-group">
			<label for="title">Title:</label>
			<input type="text" class="form-control" id="title" name="title" placeholder="Your title here..." value="{{{ Input::old('title') }}}">
		</div>
		<div class="form-group">
			<label for="body">Body:</label>
			<input type="text" class="form-control" id="body" name="body" placeholder="Type here..." value="{{{ Input::old('body') }}}">
		</div>
		<button class="btn">Submit</button>
	 </form>
@stop