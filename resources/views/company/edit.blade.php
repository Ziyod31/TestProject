@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">
					Update company
				</div>
				<div class="card-body">
					<form action="/companies/{{$company->id}}" method="POST" enctype="multipart/form-data">
						 @csrf {{method_field('PUT')}}
						<div class="form-group">
							<label>Company Name</label>
							<input type="text" name="name" class="form-control" value="{{old('name', $company->name)}}">
						</div>
						<div class="form-group">
							<label>Company Email</label>
							<input type="text" name="email" class="form-control" value="{{old('email', $company->email)}}">
						</div>
						<div class="form-group">
							<label>Company Website</label>
							<input type="text" name="website" class="form-control" value="{{old('website', $company->website)}}"> 
						</div>
						<div class="form-group">
							<label>Company Logo</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="validatedCustomFile" name="logo" value="{{old('logo', $company->logo)}}">
								<label class="custom-file-label" for="validatedCustomFile">Choose image logo ...</label>
							</div>
						</div>
						<button type="submit" class="btn btn-warning">Update Company</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
