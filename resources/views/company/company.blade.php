@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					Companies
					
				</div>

				<div class="card-body">
					@if(Auth::check())
					<a href="/companies/create" class="btn btn-success" id="myBtn">Add Company</a>
					@endif
					<br>
					<table class="table table-borderless table-hover">
						<thead class="thead-light">
							<tr>
								<th>Company Name</th>
								<th>Company Email</th>
								<th>Company Logo</th>
								<th>Company Website</th>
								<th>Actions</th>
							</tr>
						</thead>
						@foreach($companies as $company)
						<tbody>
							<tr>
								
								<td>{{$company->name}}</td>
								<td>{{$company->email}}</td>
								<td>{{$company->website}}</td>
								<td><img src="<?php echo asset("storage/$company->logo")?>"></img></td>
								
								<td class="actions">
									<a href="/companies/{{$company->id}}" class="btn btn-info">View</a>
									@if(Auth::check())
									<a href="/companies/{{$company->id}}/edit" class="btn btn-warning">Edit</a>
									<form method="post" action="/companies/{{$company->id}}" onsubmit="return confirm('Are you sure?')">
										@csrf {{method_field("DELETE")}}
										<button type="submit" class="btn btn-danger">Delete</button>
									</form>
									@endif
								</td>
								
							</tr>
						</tbody>
						@endforeach
					</table>
					{{$companies->links()}}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
