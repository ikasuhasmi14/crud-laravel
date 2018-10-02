@extends('Books.layout')

@section('content')

<h1 class="text-center"> Morls Laravel 5.7 Tutorials </h1>
<div>
	@if(Session::has('success'))
	{{Session::get('success')}}
	@endif
</div>
<div class="row">
	<a href="{{route('books.create')}}" class="btn btn-primary pull-right">Create</a>
	<table class="table table-striped">
		<thead>
			
			<th>ID</th>
			<th>Book Title</th>
			<th>Author</th>
			<th>Actions</th>
		</thead>

		<tbody>
			@foreach($books as $book)
			<tr>
			<td>{{$book->id}}</td>
			<td>{{$book->name}}</td>
			<td>{{$book->author}}</td>
			<td>
				
				<form>
					<button class="btn btn-danger" type="submit">Delete</button>
					<a href="#" class="btn btn-info">Edit</a>
					<a href="#" class="btn btn-primary">Show </a>
				</form>
			</td>
			</tr>
@endforeach
		</tbody>
	</table>
</div>	

@endsection