<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Company;

class EmployeeController extends Controller
{
	public function index()
	{
		$employees = Employee::with('companies')->latest()->paginate(10);
		return view('employee.employee', compact('employees'));
	}

	public function show($id)
	{
		$employee = Employee::find($id);
		return view('employee.show')->with('employee', $employee);
	}

	public function create()
	{
		$employees = Employee::all();
		$companies = Company::all();
		return view('employee.create', compact('companies'));
	}

	public function store(Request $request)
	{
		$this->validate($request,[
			'firstname' => 'required',
			'lastname' => 'required',
		]);

		$employee = new Employee;
		$employee->firstname = $request->input('firstname');
		$employee->lastname = $request->input('lastname');
		$employee->email = $request->input('email');
		$employee->phone = $request->input('phone');
		$employee->company_id = $request->input('company_id');
		$employee->save();

		return redirect('/employees')->with('success', 'Employee was added');
	}

	public function edit($id)
	{
		$employee = Employee::find($id);
		$companies = Company::all();
		return view('employee.edit', compact('companies', 'employee'));
	}

	public function update(Request $request, $id)
	{
		$this->validate($request,[
			'firstname' => 'required',
			'lastname' => 'required',

		]);

		$employee = Employee::find($id);
		$employee->firstname = $request->input('firstname');
		$employee->lastname = $request->input('lastname');
		$employee->email = $request->input('email');
		$employee->phone = $request->input('phone');
		$employee->company_id = $request->input('company_id');
		$employee->save();

		return redirect('/employees')->with('success', 'Employee was updated');
	}

	public function destroy($id)
	{
		$employee = employee::find($id);
		$employee->delete();

		return redirect('/employees')->with('success', 'Employee was deleted');
	}
}
