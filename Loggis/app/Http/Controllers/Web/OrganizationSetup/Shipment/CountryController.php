<?php

namespace App\Http\Controllers\Web\OrganizationSetup\Shipment;

use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CountryController extends Controller
{
    
    public function index()
    {
        $data['country'] = Country::latest()->get();

		return view('organization_setup.shipment.country.index', $data);
    }

    
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        $request->validate([
			'code' => ['required', Country::uniqueForCompany('code')],
			'name'    => ['required', 'max:255', Country::uniqueForCompany('name')],
		]);

		Country::create($request->only(['code', 'name']));
		return back()->with('success', 'Country created successfully.');
    }

   
    public function show(Country $country)
    {
        //
    }

    
    public function edit(Country $country)
    {
        //
    }

    
    public function update(Request $request, Country $country)
    {
        //
    }

    
    public function destroy(Country $country)
    {
        //
    }
}
