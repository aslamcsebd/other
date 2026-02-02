<?php

namespace App\Http\Controllers\Web\OrganizationSetup\Inventory;

use App\Models\Origin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OriginController extends Controller
{
    public function index()
    {
        $data['origin'] = Origin::latest()->get();
        return view('organization_setup.inventory.origin.index', $data);
    }

    
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        $request->validate([
			'name' => 'required|unique:origins,name|max:255',
		]);

		Origin::create($request->only('name'));

		return back()->with('success', 'Origin created successfully.');
    }

   
    public function show(string $id)
    {
        //
    }

    
    public function edit(string $id)
    {
        //
    }

    
    public function update(Request $request, string $id)
    {
        //
    }

    
    public function destroy(string $id)
    {
        //
    }
}
