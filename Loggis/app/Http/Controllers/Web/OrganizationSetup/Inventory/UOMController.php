<?php

namespace App\Http\Controllers\Web\OrganizationSetup\Inventory;

use App\Models\Uom;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UOMController extends Controller
{
    public function index()
    {
        $data['uoms'] = Uom::latest()->get();
        return view('organization_setup.inventory.uom.index', $data);
    }

    public function create()
    {
        //
    }
    
    public function store(Request $request)
    {
        $request->validate([
			'name' => 'required|unique:uoms,name|max:255',
		]);

// 		$request->validate([
//     'name' => 'required|max:255|unique:uoms,name,NULL,id,company_id,' . auth()->user()->company_id,
// ]);
		
		UOM::create($request->only('name'));

		return back()->with('success', 'UOM created successfully.');
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
