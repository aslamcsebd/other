<?php

namespace App\Http\Controllers\Web\OrganizationSetup\Sales;

use App\Models\Currency;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CurrencyController extends Controller
{
    public function index()
    {
        $data['currency'] = Currency::latest()->get();

		return view('organization_setup.sales.currency.index', $data);
    }

    
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        $request->validate([
			'code' => ['required', Currency::uniqueForCompany('code')],
			'name'    => ['required', 'max:255', Currency::uniqueForCompany('name')],
		]);

		Currency::create($request->only(['code', 'name', 'rate']));
		return back()->with('success', 'Currency created successfully.');
    }

   
    public function show(Currency $currency)
    {
        //
    }

    
    public function edit(Currency $currency)
    {
        //
    }

    
    public function update(Request $request, Currency $currency)
    {
        //
    }

    
    public function destroy(Currency $currency)
    {
        //
    }
}
