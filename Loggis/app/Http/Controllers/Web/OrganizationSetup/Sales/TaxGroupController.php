<?php

namespace App\Http\Controllers\Web\OrganizationSetup\Sales;

use App\Http\Controllers\Controller;
use App\Models\TaxGroup;
use Illuminate\Http\Request;

class TaxGroupController extends Controller
{
    public function index()
    {
        $data['taxGroup'] = TaxGroup::latest()->get();

		return view('organization_setup.sales.tax_group.index', $data);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
			'name'    => ['required', 'max:255', TaxGroup::uniqueForCompany('name')],
		]);

		TaxGroup::create($request->only(['name']));
		return back()->with('success', 'Tax group created successfully.');
    }

    public function show(TaxGroup $taxGroup)
    {
        //
    }

    public function edit(TaxGroup $taxGroup)
    {
        //
    }

    public function update(Request $request, TaxGroup $taxGroup)
    {
        //
    }

    public function destroy(TaxGroup $taxGroup)
    {
        //
    }
}
