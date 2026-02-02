<?php

namespace App\Http\Controllers\Web\OrganizationSetup\Inventory;

use Illuminate\Http\Request;
use App\Models\StorageGroup;
use App\Http\Controllers\Controller;

class StorageGroupController extends Controller
{
    public function index()
    {
        $data['storageGroup'] = StorageGroup::latest()->get();

		return view('organization_setup.inventory.storage_group.index', $data);
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $request->validate([
			'name'    => ['required', 'max:255', StorageGroup::uniqueForCompany('name')],
			'code'    => ['required', 'max:255', StorageGroup::uniqueForCompany('code')],
		]);

		StorageGroup::create($request->only(['name', 'code', 'details']));
		return back()->with('success', 'Storage group created successfully');
    }

    
    public function show(StorageGroup $storageGroup)
    {
        //
    }

   
    public function edit(StorageGroup $storageGroup)
    {
        //
    }

   
    public function update(Request $request, StorageGroup $storageGroup)
    {
        //
    }

    
    public function destroy(StorageGroup $storageGroup)
    {
        //
    }
}
