@extends('layouts.master')

@section('content')
	<h1 class="cursive">Create a New Post</h1>
	<hr>
	<form class="form-horizontal" role="form" method="POST" action="{{{ action('PostsController@store') }}}">
		<div class="form-group">
			<label for="title" class="col-sm-2 control-label">Title:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="title" name="title" placeholder="Your title here..." value="{{{ Input::old('title') }}}">
				{{ $errors->has('title') ? $errors->first('title', '<p><span class="help-block">:message</span></p>') : '' }}
			</div>
		</div>
		<div class="form-group">
			<label for="body" class="col-sm-2 control-label">Body:</label>
			<div class="col-sm-10">
				<textarea class="form-control" id="body" name="body" rows="5">{{{ Input::old('body') }}}</textarea>
				{{ $errors->has('body') ? $errors->first('body', '<p><span class="help-block">:message</span></p>') : '' }}
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button class="btn" type="submit">Create Post</button>
				<a href="{{{ action('PostsController@index') }}}" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-arrow-left"></span> Back to all posts</a>
			</div>
		</div>
	 </form>
@stop