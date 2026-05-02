<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
	{
		return view("pages.employee.index");
	}

	public function create()
	{
		return view("pages.employee.create");
	}
}
