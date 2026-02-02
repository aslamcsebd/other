<?php

namespace App\Http\Controllers\Web\OrganizationSetup\Sales;

use App\Models\DeliveryTerm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DeliveryTermController extends Controller
{
    public function index()
    {
		$data['deliveryTerm'] = DeliveryTerm::latest()->get();

		return view('organization_setup.sales.delivery_term.index', $data);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
			'name'    => ['required', 'max:255', DeliveryTerm::uniqueForCompany('name')],
		]);

		DeliveryTerm::create($request->only(['name', 'details', 'cash_on_delivery']));

		return back()->with('success', 'Delivery term created successfully.');
    }

    public function show(DeliveryTerm $deliveryTerm)
    {
        //
    }

    
    public function edit(DeliveryTerm $deliveryTerm)
    {
        //
    }

    
    public function update(Request $request, DeliveryTerm $deliveryTerm)
    {
        //
    }

    
    public function destroy(DeliveryTerm $deliveryTerm)
    {
        //
    }
}
