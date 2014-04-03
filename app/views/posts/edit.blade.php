@extends('layouts.master')

@section('topscript')
	<script src="/ckeditor/ckeditor.js"></script>
@stop

@section('content')
	<h1 class="cursive">Edit Post</h1>
	<hr>

<!-- START FORM -->
	{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT', 'files' => true, 'class' => 'form-horizontal')) }}
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
	@if ($post->image)
	<div class="form-group">
		<label class="col-sm-2 control-label">Current Photo:</label>
		<div class="col-sm-10">
			<img src="{{ $post->image }}"></p>
		</div>
	</div>
	@else
	@endif
	<div class="form-group">
		{{ Form::label('image', 'Upload Image', array('class' => 'col-sm-2 control-label')) }}
		<div class="col-sm-10">
			{{ Form::file('image', array('class' => 'form-control')) }}
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			{{ Form::submit('Save Post', array('class' => 'btn btn-primary'))}}
			<a href="{{{ action('PostsController@index') }}}" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-arrow-left"></span> Back to all posts</a>
		</div>
	</div>

	<script>
	    // Replace the <textarea id="editor1"> with a CKEditor
	    // instance, using default configuration.
	    CKEDITOR.replace( 'body' );
	</script>

	{{ Form::close() }}
<!-- END FORM -->
@stop