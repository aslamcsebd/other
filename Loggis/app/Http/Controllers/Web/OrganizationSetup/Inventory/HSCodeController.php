<?php

namespace App\Http\Controllers\Web\OrganizationSetup\Inventory;

use App\Models\Uom;
use App\Http\Controllers\Controller;
use App\Models\HSCode;
use Illuminate\Http\Request;

class HSCodeController extends Controller
{
	public function index()
	{
		$data['hsCode'] = HSCode::latest()->get();
		$data['uoms'] = Uom::latest()->get();

		return view('organization_setup.inventory.hs_code.index', $data);
	}

	public function create()
	{
		//
	}

	public function store(Request $request)
	{
		$request->validate([
			'hs_code' => ['required', HSCode::uniqueForCompany('hs_code')],
			'name'    => ['required', 'max:255', HSCode::uniqueForCompany('name')],
		]);

		HSCode::create($request->only(['hs_code', 'name', 'uom_id']));
		return back()->with('success', 'HS code created successfully.');
	}

	public function show(HSCode $hSCode)
	{
		//
	}

	public function edit(HSCode $hSCode)
	{
		//
	}

	public function update(Request $request, HSCode $hSCode)
	{
		//
	}

	public function destroy(HSCode $hSCode)
	{
		//
	}
}
