@extends ('layouts.master')

@section ('content')

<h2 align="center">Edit blog Posts</h2>

<div class="col-md-6">
{{ Form::model($post, (array('action' => ['PostsController@update', $post->id], 'method'=> 'PUT')))}}
   
    <div class="form-group">
    {{ $errors->first('title', '<span class="help-block"><div class="alert alert-danger" role="alert">Must have a title.</div></span>') }}
    	<input type="text" name="title" value=" {{{ $post->title}}} "></input>
    
    </div>
    <div class="form-group">
    {{ $errors->first('body', '<span class="help-block"><div class="alert alert-danger" role="alert">Must have a title.</div></span>') }}
    	<textarea name="body" class="form-control" rows="3" value=" {{{ $post->body }}} "></textarea>
    <div>
    <input type="submit" class="btb btn-info" name="button">
    
{{ Form::close() }}

@stop