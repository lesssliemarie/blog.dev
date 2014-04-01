@extends('layouts.master')

@section('content')
	<h1 class="cursive">Please sign in.</h1>
	<hr>

	<div class="col-md-5">
<!-- START FORM -->
	{{ Form::open(array('action' => 'PostsController@store', 'class' => 'form-horizontal')) }}
	<div class="form-group">
		{{ Form::label('email', 'Email', array('class' => 'col-sm-2 control-label')) }}
		<div class="col-sm-10">
			{{ Form::text('email', null, array('class' => 'form-control')) }}
			{{ $errors->first('email', '<p><span class="help-block">:message</span></p>') }}
		</div>
	</div>
	<div class="form-group">
		{{ Form::label('password', 'Password', array('class' => 'col-sm-2 control-label')) }}
		<div class="col-sm-10">
			{{ Form::text('password', null, array('class' => 'form-control')) }}
			{{ $errors->first('password', '<p><span class="help-block">:message</span></p>') }}
		</div>
	</div>
	<div class="form-group">
		<label class="checkbox col-sm-2 control-label"></label>
		<div class="col-sm-10">
			<input type="checkbox" value="Remember Me"> Remember Me
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			{{ Form::submit('Login', array('class' => 'btn btn-primary'))}}
		</div>
	</div>

	{{ Form::close() }}
<!-- END FORM -->

	</div>
@stop