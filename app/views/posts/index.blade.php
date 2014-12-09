@extends ('layouts.master')

@section ('content')

<div id="background" class="container" align="center">
	<h2 align="center">Blog Posts</h2>
		<br>
		@foreach ($posts as $post)
			<div class=" col-md-4">
				<h3> {{$post->title}} </h3>
				<p class='blog_body'> {{ substr($post->body, 0, 200)}} ...</p>
				<p class='created_on'>Created on: {{$post->created_at}} </p>
				<p> by {{{ $post->user->email }}} </p>

				<div class="index_button_div">
					<a class='btn btn-info btn-xs' href="{{ action('PostsController@show', $post->id) }}">Edit Post</a>
					<a  class='index_button' href="{{ action('PostsController@edit', $post->id) }}"></a>
					<button class="btn btn-danger btn-xs delete-btn " data-post-id="{{{ $post->id }}}">Delete</button>
				</div>
			</div>
		@endforeach
		{{ Form::open(['method' => 'delete', 'id' => 'delete-form']) }}
	 	{{ Form::close() }}

		<div class=" background container text-center">
                {{ $posts->links() }} {{--  ->appends('search', '*')->links() --}}
        </div>
	<div align="center" class="col-xs-6 col-sm-3" role="navigation">
		{{ Form::open(array('action'=> array('PostsController@index'), 'class'=>'form-horizontal', 'method'=> 'GET')) }}
		{{ Form::text('search', null, array('placeholder'=> 'Search Posts')) }}

		{{ Form::submit('Search') }}

		{{ Form::close() }}
	</div>

</div>



@stop

@section('bottomscript')
	<script type="text/javascript">
		$('.delete-btn').click(function() {
			var postId = $(this).data('post-id');

			$("delete-form").attr('action', '/posts/' + postId);

			if (confirm('Are you sure you want to delete this post?')){
				$("#delete-form").submit();
			}
		});
	</script>

@stop