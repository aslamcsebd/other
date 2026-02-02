<?php

namespace App\Http\Controllers\Web\OrganizationSetup\Sales;

use App\Models\SalesPerson;
use Illuminate\Http\Request;
use App\Models\CustomerGroup;
use App\Http\Controllers\Controller;

class SalesPersonController extends Controller
{
	public function index()
	{
		$data['salesPerson'] = SalesPerson::latest()->get();
		$data['customerGroup'] = CustomerGroup::latest()->get();

		return view('organization_setup.sales.sales_person.index', $data);
	}

	public function create()
	{
		//
	}

	public function store(Request $request)
	{
		$request->validate([
			'employee_no'    => ['required', 'max:255', SalesPerson::uniqueForCompany('employee_no')],
			'email'    => ['required', 'max:255', SalesPerson::uniqueForCompany('email')],
			'phone'    => ['required', 'max:255', SalesPerson::uniqueForCompany('phone')],
			'country_code'   => ['required'],
		]);

		$fullPhone = $request->country_code . $request->phone;

		SalesPerson::create($request->only(['name', 'employee_no', 'email', 'job_title', 'manager_id', 'commission', 'department_code', 'customer_group_id']) + ['phone' => $fullPhone]);
		return back()->with('success', 'Sales person created successfully');
	}

	
	/**
	 * Display the specified resource.
	 */
	public function show(SalesPerson $salesPerson)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 */
	public function edit(SalesPerson $salesPerson)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update(Request $request, SalesPerson $salesPerson)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy(SalesPerson $salesPerson)
	{
		//
	}
}
