<?php

namespace App\Http\Controllers\Web\OrganizationSetup\Sales;

use Illuminate\Http\Request;
use App\Models\PaymentMethod;
use App\Http\Controllers\Controller;

class PaymentMethodController extends Controller
{
    public function index()
    {
		$data['paymentMethod'] = PaymentMethod::latest()->get();

		return view('organization_setup.sales.payment_method.index', $data);
    }

    
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        $request->validate([
			'name'    => ['required', 'max:255', PaymentMethod::uniqueForCompany('name')],
		]);

		PaymentMethod::create($request->only(['name']));
		return back()->with('success', 'Payment method created successfully.');
    }

   
    public function show(PaymentMethod $paymentMethod)
    {
        //
    }

    
    public function edit(PaymentMethod $paymentMethod)
    {
        //
    }

    
    public function update(Request $request, PaymentMethod $paymentMethod)
    {
        //
    }

    
    public function destroy(PaymentMethod $paymentMethod)
    {
        //
    }
}
