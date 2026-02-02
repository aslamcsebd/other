<?php

namespace App\Http\Controllers\Web\OrganizationSetup\Procurement;

use App\Models\TaxGroup;
use App\Models\PaymentTerm;
use App\Models\VendorGroup;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VendorGroupController extends Controller
{
    public function index()
    {
        $data['vendorGroup'] = VendorGroup::latest()->get();

		$data['paymentTerm'] = PaymentTerm::latest()->get();
		$data['taxGroup'] = TaxGroup::latest()->get();

		return view('organization_setup.procurement.vendor_group.index', $data);
    }

    
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        $request->validate([
			'name'    => ['required', 'max:255', VendorGroup::uniqueForCompany('name')],
			'payment_term_id'    => ['required', 'max:255', VendorGroup::uniqueForCompany('payment_term_id')],
			'tax_group_id'    => ['required', 'max:255', VendorGroup::uniqueForCompany('tax_group_id')],
		]);

		VendorGroup::create($request->only(['name', 'payment_term_id', 'tax_group_id']));
		return back()->with('success', 'Vendor group created successfully');
    }

   
    public function show(VendorGroup $vendorGroup)
    {
        //
    }

    
    public function edit(VendorGroup $vendorGroup)
    {
        //
    }

    
    public function update(Request $request, VendorGroup $vendorGroup)
    {
        //
    }

    
    public function destroy(VendorGroup $vendorGroup)
    {
        //
    }
}
