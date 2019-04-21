<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Company;

class Employee extends Model
{
	public function companies()
	{
		return $this->belongsTo(\App\Company::class, 'company_id');
	}
}
