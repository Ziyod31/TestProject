@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				
				<div class="card-header">
					Employee
				</div>
				<div class="card-body">
					<table class="table table-borderless table-hover">
						<tbody>
							<tr><th>Employee Firstname: </th><td>{{$employee->firstname}}</td></tr>
							<tr><th>Employee Lastname: </th><td>{{$employee->lastname}}</td></tr>
							<tr><th>Employee Email: </th><td>{{$employee->email}}</td></tr>
							<tr><th>Employee Phone: </th><td>{{$employee->phone}}</td></tr>
							<tr><th>Employee Company: </th><td>{{$employee->companies->name}}</td></tr>
						</tbody>
					</table>
					<a class="btn btn-primary" href="/employees">Back</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection