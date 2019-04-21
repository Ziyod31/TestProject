@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">
					Create new company
				</div>
				<div class="card-body">
					<form action="/companies/store" method="POST" enctype="multipart/form-data">
						{{ csrf_field() }}
						<div class="form-group">
							<label>Company Name</label>
							<input type="text" name="name" class="form-control">
						</div>
						<div class="form-group">
							<label>Company Email</label>
							<input type="text" name="email" class="form-control">
						</div>
						<div class="form-group">
							<label>Company Website</label>
							<input type="text" name="website" class="form-control"> 
						</div>
						<div class="form-group">
							<label>Company Logo</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="validatedCustomFile" name="logo">
								<label class="custom-file-label" for="validatedCustomFile">Choose image logo ...</label>
							</div>
						</div>
						<button type="submit" class="btn btn-success">Add Company</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
