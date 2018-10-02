@extends('Books.layout')

@section('content')

<h1 class="text-center"> Morls Laravel 5.7 Tutorials </h1>

<div class="row">
	<a href="{{route('books.index')}}" class="btn btn-primary pull-right">Back</a>
	
	

		<div class="col-md-6 col-md-offset-3">
			<div class="">
				<ul>
					@foreach($errors->all() as $error)
				<li>{{$error}}</li>
				@endforeach

				</ul>
			
			</div>
			<form action="{{route('books.store')}}" method="POST" > 
			
		
				<div class="form-group">
			<label>Book Title</label>
			<input type="text" name="name" class="form-control"> 
		</div>

		<div class="form-group">
			<label>Auhtor Name</label>
			<input type="text" name="author" class="form-control"> 
		</div>

		<button type="submit" class="btn btn-success btn-block"> SUBMIT </button>
@csrf
	</form>
</div>

</div>	

@endsection