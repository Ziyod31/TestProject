<?php


Route::get('/', function () {
	return view('index');
});

Auth::routes();

Route::get('/register', function(){
	return redirect('/');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/companies', 'CompanyController@index');
Route::get('/companies/create', 'CompanyController@create');
Route::get('/companies/{id}', 'CompanyController@show');
Route::post('/companies/store', 'CompanyController@store');
Route::get('/companies/{id}/edit', 'CompanyController@edit');
Route::delete('/companies/{id}', 'CompanyController@destroy');
Route::put('/companies/{id}', 'CompanyController@update');

Route::get('/employees', 'EmployeeController@index');
Route::get('/employees/create', 'EmployeeController@create');
Route::get('/employees/{id}', 'EmployeeController@show');
Route::post('/employees/store', 'EmployeeController@store');
Route::get('/employees/{id}/edit', 'EmployeeController@edit');
Route::delete('/employees/{id}', 'EmployeeController@destroy');
Route::put('/employees/{id}', 'EmployeeController@update');