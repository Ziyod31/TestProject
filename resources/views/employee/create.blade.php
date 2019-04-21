@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">
					Create new employee
				</div>
				<div class="card-body">
					<form action="/employees/store" method="POST">
						{{ csrf_field() }}
						<div class="form-group">
							<label for="inputState">Employee Company</label>
							<select id="inputState" class="form-control" name="company_id">
								<option selected>Choose...</option>
								@foreach($companies as $comp)
								<option value="{{$comp->id}}">
									{{$comp->name}}
								</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<label>Employee Firstame</label>
							<input type="text" name="firstname" class="form-control">
						</div>
						<div class="form-group">
							<label>Employee Lastname</label>
							<input type="text" name="lastname" class="form-control">
						</div>
						<div class="form-group">
							<label>Employee Email</label>
							<input type="text" name="email" class="form-control"> 
						</div>
						<div class="form-group">
							<label>Employee Phone</label>
							<input type="text" name="phone" class="form-control"> 
						</div>
						<button type="submit" class="btn btn-success">Add Employee</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
