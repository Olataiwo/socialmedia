@extends('layouts.master');

@section('content')
 @include('includes.messageblock')
	<section class="row new-post" >

		<div class = 'col-md-6 offset-md-3'>
			<header>
				<h3>Whats on your mind</h3>
			</header>
			<form action = "{{route('post.create')}}" method="post">
				<div class="form-group">
					<textarea class="form-control" name="body" id="new-post" row="5" placeholder ="post here"></textarea>
				</div>

					<button type="submit" class="btn btn-primary">Submit</button>
					<input type="hidden" name="_token" value="{{Session::token()}}">
			</form>
		</section>
	<section class = 'row-post'>
		<div 'col-md-6 offset-md-3'>
			<header><h3>What other people say...</h3></header>
			@foreach($posts as $post)
			<article class="post">
				<p>{{$post->body}}</p>

				<div class = "info">
				Posted by {{$post->user->first_name}} on {{$post->created_at}}
			<div class= "interaction">
				<a href="#">Like</a> |
				<a href="#">Dislike</a> |  
				<a href="#">Edit</a>   |
				<a href="#">Delete</a>  |
			</div>
			
			</article>

			@endforeach
			
		</div>


	</section>
				
		</div>

@endsection
