<?php

namespace App\Http\Controllers\Web\OrganizationSetup\Shipment;

use App\Models\Territory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TerritoryController extends Controller
{
    public function index()
    {
        $data['territory'] = Territory::latest()->get();

		return view('organization_setup.shipment.territory.index', $data);
    }

    
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
		$request->validate([
			'code' => ['required', Territory::uniqueForCompany('code')],
			'name'    => ['required', 'max:255', Territory::uniqueForCompany('name')],
		]);

		Territory::create($request->only(['code', 'name']));
		return back()->with('success', 'Territory created successfully.');
    }

   
    public function show(Territory $territory)
    {
        //
    }

    
    public function edit(Territory $territory)
    {
        //
    }

    
    public function update(Request $request, Territory $territory)
    {
        //
    }

    
    public function destroy(Territory $territory)
    {
        //
    }
}
