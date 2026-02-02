<?php

namespace App\Http\Controllers\Web\OrganizationSetup\Sales;

use App\Models\PaymentTerm;
use Illuminate\Http\Request;
use App\Models\PaymentMethod;
use App\Http\Controllers\Controller;

class PaymentTermController extends Controller
{
    public function index()
    {
		$data['paymentMethod'] = PaymentMethod::latest()->get();
		$data['paymentTerm'] = PaymentTerm::latest()->get();

		return view('organization_setup.sales.payment_term.index', $data);
    }

    
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        $request->validate([
			'name'    => ['required', 'max:255', PaymentTerm::uniqueForCompany('name')],
		]);

		PaymentTerm::create($request->only(['name', 'payment_method_id', 'month', 'days', 'is_default']));
		return back()->with('success', 'Payment term created successfully.');
    }

   
    public function show(PaymentTerm $paymentTerm)
    {
        //
    }

    
    public function edit(PaymentTerm $paymentTerm)
    {
        //
    }

    
    public function update(Request $request, PaymentTerm $paymentTerm)
    {
        //
    }

    
    public function destroy(PaymentTerm $paymentTerm)
    {
        //
    }
}
