<?php

namespace App\Http\Controllers\Web\OrganizationSetup\Sales;

use App\Models\TaxGroup;
use App\Models\PaymentTerm;
use Illuminate\Http\Request;
use App\Models\CustomerGroup;
use App\Http\Controllers\Controller;

class CustomerGroupController extends Controller
{
    public function index()
    {
        $data['customerGroup'] = CustomerGroup::latest()->get();		
        $data['paymentTerm'] = PaymentTerm::latest()->get();
        $data['taxGroup'] = TaxGroup::latest()->get();

		return view('organization_setup.sales.customer_group.index', $data);
    }

    
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        $request->validate([
			'manual_id'    => ['required', 'max:255', CustomerGroup::uniqueForCompany('manual_id')],
			'name'    => ['required', 'max:255', CustomerGroup::uniqueForCompany('name')],
		]);

		CustomerGroup::create($request->only(['manual_id', 'name', 'payment_term_id', 'tax_group_id']));

		return back()->with('success', 'Customer group created successfully');
    }

   
    public function show(CustomerGroup $customerGroup)
    {
        //
    }

    
    public function edit(CustomerGroup $customerGroup)
    {
        //
    }

    
    public function update(Request $request, CustomerGroup $customerGroup)
    {
        //
    }

    
    public function destroy(CustomerGroup $customerGroup)
    {
        //
    }
}
