<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Employee;

class Company extends Model
{
    public function employees()
    {
    	return $this->hasMany(\App\Employee::class);
    }
}