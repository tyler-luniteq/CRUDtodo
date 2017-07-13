@extends('layouts.app')
@section('content')
<div class="container">
	<h2>Add New Task</h2>
	<form method="POST" action="/task">
		<div class="form-group">
			<textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Add Task</button>
		</div>
		{{csrf_field()}}
	</form>
</div>

@endsection