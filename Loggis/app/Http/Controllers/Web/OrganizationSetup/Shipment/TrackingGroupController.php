<?php

namespace App\Http\Controllers\Web\OrganizationSetup\Shipment;

use Illuminate\Http\Request;
use App\Models\TrackingGroup;
use App\Http\Controllers\Controller;

class TrackingGroupController extends Controller
{

    public function index()
    {
        $data['trackingGroup'] = TrackingGroup::latest()->get();

		return view('organization_setup.shipment.tracking_group.index', $data);
    }

   
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $request->validate([
			'name'    => ['required', 'max:255', TrackingGroup::uniqueForCompany('name')],
			'code'    => ['required', 'max:255', TrackingGroup::uniqueForCompany('code')],
		]);

		TrackingGroup::create($request->only(['name', 'code', 'details']));
		return back()->with('success', 'Tracking group created successfully');
    }

   
    public function show(TrackingGroup $trackingGroup)
    {
        //
    }

    
    public function edit(TrackingGroup $trackingGroup)
    {
        //
    }

   
    public function update(Request $request, TrackingGroup $trackingGroup)
    {
        //
    }

    
    public function destroy(TrackingGroup $trackingGroup)
    {
        //
    }
}
