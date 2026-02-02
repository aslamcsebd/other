<?php

namespace App\Http\Controllers\Web\OrganizationSetup\Sales;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CustomerClassifiactionGroup;

class CustomerClassifiactionGroupController extends Controller
{
    public function index()
    {
		$data['customerClassifiactionGroup'] = CustomerClassifiactionGroup::latest()->get();

		return view('organization_setup.sales.customer_classifiaction_group.index', $data);
    }

    
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
		$request->validate([
			'manual_id' => ['required', CustomerClassifiactionGroup::uniqueForCompany('manual_id')],
			'name'    => ['required', 'max:255', CustomerClassifiactionGroup::uniqueForCompany('name')],
		]);

		CustomerClassifiactionGroup::create($request->only(['manual_id', 'name', 'details']));

		return back()->with('success', 'Customer classifiaction group created successfully.');

    }

   
    public function show(CustomerClassifiactionGroup $customerClassifiactionGroup)
    {
        //
    }

    
    public function edit(CustomerClassifiactionGroup $customerClassifiactionGroup)
    {
        //
    }

    
    public function update(Request $request, CustomerClassifiactionGroup $customerClassifiactionGroup)
    {
        //
    }

    
    public function destroy(CustomerClassifiactionGroup $customerClassifiactionGroup)
    {
        //
    }
}
