@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					
					<div class="row">
						<div class="col-md-8">
							<table class="table table-borderless">
								<tr>
									<td><b>Company name :</b> {{$company->name}}</td>
								</tr>
								<tr>
									<td><b>Company email :</b> {{$company->email}}</td>
								</tr>
								<tr>
									<td><b>Company website :</b> {{$company->website}}</td>
								</tr>
							</table>
						</div>
						<div class="col-md-3">
							<img src="/storage/{{$company->logo}}"></img>
						</div>
					</div>
					<a class="btn btn-primary" href="/companies">Back</a>
				</div>

				<div>

				</div>
				<div class="card-body">
					<div class="card-header">
						Company Employees
					</div>
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Employee Firstname</th>
								<th>Employee Lastname</th>
								<th>Employee Email</th>
								<th>Employee Phone</th>
							</tr>
						</thead>
						<tbody>
							@foreach($company->employees as $emp)
							<tr>
								<td>{{$emp->firstname}}</td>
								<td>{{$emp->lastname}}</td>
								<td>{{$emp->email}}</td>
								<td>{{$emp->phone}}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					{{$employees->links() }}
				</div>

			</div>
		</div>
	</div>
</div>
@endsection