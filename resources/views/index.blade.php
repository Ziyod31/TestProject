@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">View All Companies</div>
                        <div class="col-md-4"><a href="/companies" class="btn btn-info">View All</a></div>
                    </div>
                </div>
                <hr>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">View All Employees</div>
                        <div class="col-md-4"><a href="/employees" class="btn btn-info">View All</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
