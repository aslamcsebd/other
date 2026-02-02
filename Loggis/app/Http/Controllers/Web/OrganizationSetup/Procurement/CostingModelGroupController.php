<?php

namespace App\Http\Controllers\Web\OrganizationSetup\Procurement;

use Illuminate\Http\Request;
use App\Models\CostingModelGroup;
use App\Http\Controllers\Controller;

class CostingModelGroupController extends Controller
{
    
    public function index()
    {
		$data['costingModelGroup'] = CostingModelGroup::latest()->get();

		return view('organization_setup.procurement.costing_model_group.index', $data);
    }

    
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        $request->validate([
			'name'    => ['required', 'max:255', CostingModelGroup::uniqueForCompany('name')],
			'code'    => ['required', 'max:255', CostingModelGroup::uniqueForCompany('code')],
		]);

		CostingModelGroup::create($request->only(['name', 'code', 'details']));
		return back()->with('success', 'Costing model group created successfully');
    }

   
    public function show(CostingModelGroup $costingModelGroup)
    {
        //
    }

    
    public function edit(CostingModelGroup $costingModelGroup)
    {
        //
    }

    
    public function update(Request $request, CostingModelGroup $costingModelGroup)
    {
        //
    }

    
    public function destroy(CostingModelGroup $costingModelGroup)
    {
        //
    }
}
