<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Company;
use App\Employee;

class CompanyController extends Controller
{
	public function index()
	{
		$companies = Company::latest()->paginate(10);
		return view('company.company')->with('companies', $companies);
	}

	public function show($id)
	{
		$company = Company::find($id);
		$employees = $company->employees()->paginate(10);
		return view('company.show', compact(['company'],['employees']),);
	}

	public function create()
	{
		$companies = Company::all();
		return view('company.create')->with('companies', $companies);
	}

	public function store(Request $request)
	{
		$this->validate($request,[
			'name' => 'required',
		]);

		$company = new Company;
		$company->name = $request->input('name');
		$company->email = $request->input('email');
		$company->website = $request->input('website');
		$path = $request->file('logo')->store('/images');
		$company->logo = $path;
		$company->save();

		return redirect('/companies')->with('success', 'Company was added');
	}

	public function edit($id)
	{
		$company = Company::find($id);
		return view('company.edit')->with('company', $company);
	}

	public function update(Request $request, $id)
	{
		$this->validate($request,[
			'name' => 'required',
		]);

		$company = Company::find($id);
		$company->name = $request->input('name');
		$company->email = $request->input('email');
		$company->website = $request->input('website');
		$path = $request->file('logo')->store('logo', 'public');
		$company->logo = $path;
		$company->save();

		return redirect('/companies')->with('success', 'Company was updated');
	}

	public function destroy($id)
	{
		$company = Company::find($id);
		$company->delete();

		return redirect('/companies')->with('success', 'Company was deleted');
	}
}
