@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					Employees
					
				</div>

				<div class="card-body">
					@if(Auth::check())
					<a href="/employees/create" class="btn btn-success" id="myBtn">Add Employee</a>
					@endif
					<br>
					<table class="table table-borderless table-hover">
						<thead class="thead-light">
							<tr>
								<th>Employee Company</th>
								<th>Employee Firstname</th>
								<th>Employee Lastname</th>
								<th>Employee Email</th>
								<th>Employee Phone</th>
								<th>Actions</th>
							</tr>
						</thead>
						@foreach($employees as $employee)
						<tbody>
							<tr>
								<td>{{$employee->companies->name}}</td>
								<td>{{$employee->firstname}}</td>
								<td>{{$employee->lastname}}</td>
								<td>{{$employee->email}}</td>
								<td>{{$employee->phone}}</td>
								
								<td class="actions">
									<a href="/employees/{{$employee->id}}" class="btn btn-info">View</a>
									@if(Auth::check())
									<a href="/employees/{{$employee->id}}/edit" class="btn btn-warning">Edit</a>
									<form method="post" action="/employees/{{$employee->id}}" onsubmit="return confirm('Are you sure?')">
										@csrf {{method_field("DELETE")}}
										<button type="submit" class="btn btn-danger">Delete</button>
									</form>
									@endif
								</td>
								
							</tr>
						</tbody>
						@endforeach
					</table>

					{{$employees->links()}}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
