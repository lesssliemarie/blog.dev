@extends('layouts.master')

@section('content')
	<h1 class="cursive">Create a New Post</h1>
	<hr>

<!-- START FORM -->
	{{ Form::open(array('action' => 'PostsController@store', 'class' => 'form-horizontal')) }}
	<div class="form-group">
		{{ Form::label('title', 'Title', array('class' => 'col-sm-2 control-label')) }}
		<div class="col-sm-10">
			{{ Form::text('title', null, array('class' => 'form-control')) }}
			{{ $errors->first('title', '<p><span class="help-block">:message</span></p>') }}
		</div>
	</div>
	<div class="form-group">
		{{ Form::label('body', 'Body', array('class' => 'col-sm-2 control-label')) }}
		<div class="col-sm-10">
			{{ Form::textarea('body', null, array('class' => 'form-control')) }}
			{{ $errors->first('body', '<p><span class="help-block">:message</span></p>') }}
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			{{ Form::submit('Create Post', array('class' => 'btn btn-primary'))}}
			<a href="{{{ action('PostsController@index') }}}" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-arrow-left"></span> Back to all posts</a>
		</div>
	</div>

	{{ Form::close() }}
<!-- END FORM -->
@stop