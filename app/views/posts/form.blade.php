
<div class="form-group">
    <p>Title:</p>
    {{ $errors->first('title', '<span class="help-block"><div class="alert alert-danger" role="alert">Must have a title.</div></span>') }}
    <!-- <input type="text" name="title" value="{{{ Input::old('title') }}}" placeholder="Title"> -->
	{{Form::text('title', $posts->title, ['class' => 'form-control', 'autofocus']) }}
</div>
<div class="form-group">
    {{ $errors->first('body', '<span class="help-block"><div class="alert alert-danger" role="alert">Must have a body.</div></span>') }}
    <!-- <textarea name="body" class="form-control" rows="3" value="{{{ Input::old('body') }}}" placeholder="Body"></textarea> -->
    <p>Body:</p>
    {{Form::textarea('body', $posts->body, ['class' => 'form-control', 'rows' => 4]) }}
</div>