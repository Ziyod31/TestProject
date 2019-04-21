<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Employee;
use App\Company;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(Company::class, 5)->create()->each(function ($company) {
    		factory(Employee::class, 5)->create(['company_id'=>$company->id]);
    	});
    }
}
