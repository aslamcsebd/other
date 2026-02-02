<?php

namespace App\Http\Controllers\Web;

use App\Models\User;
use App\Models\Branch;
use App\Models\Address;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;

class DashboardController extends Controller
{
	public function adminDashboard()
	{
		return view('pages.dashboard.admin-dashboard');
	}

	public function employeeDashboard()
	{
		return view('pages.dashboard.employee-dashboard');
	}

	public function dealsDashboard()
	{
		return view('pages.dashboard.deals-dashboard');
	}

	public function leadsDashboard()
	{
		return view('pages.dashboard.leads-dashboard');
	}

	public function chat()
	{
		return view('pages.interaction.chat');
	}

	public function email()
	{
		return view('pages.interaction.email');
	}

	public function calendar()
	{
		return view('pages.interaction.calendar');
	}

	public function todo()
	{
		return view('pages.interaction.to-do');
	}

	public function client()
	{
		return view('pages.client');
	}

	public function vendor()
	{
		return view('pages.vendor');
	}

	public function lead()
	{
		return view('pages.lead');
	}

	public function shipments()
	{
		return view('pages.shipments');
	}

	public function shipmentList()
	{
		return view('pages.shipment-list');
	}

	public function boeList()
	{
		return view('pages.boe-list');
	}

	public function boeCreate()
	{
		return view('pages.boe-create');
	}

	public function invoice()
	{
		return view('pages.invoice');
	}

	public function customerGroup()
	{
		return view('pages.organization_setup.sales.index');
	}

	public function customerClass()
	{
		return view('pages.organization_setup.customer_class.index');
	}

	public function termPayment()
	{
		return view('pages.organization_setup.term_of_payment.index');
	}

	public function methodPayment()
	{
		return view('pages.organization_setup.method_of_payment.index');
	}

	public function termDelivery()
	{
		return view('pages.organization_setup.term_of_delivery.index');
	}

	public function salesPerson()
	{
		return view('pages.organization_setup.sales_person.index');
	}

	public function vendorGroup()
	{
		return view('pages.organization_setup.vendor_group.index');
	}

	public function territory()
	{
		return view('pages.organization_setup.shipment.territory.index');
	}

	public function country()
	{
		return view('pages.organization_setup.shipment.country.index');
	}

	public function productService()
	{
		return view('pages.product-service');
	}

	// Common code
	public function status(Request $request)
	{
		$modelClass = "App\\Models\\{$request->model}";

		if (!class_exists($modelClass) || !($item = $modelClass::find($request->id))) {
			return response()->json(['message' => 'Table or column not found.'], 404);
		}

		$field = $request->field;
		$item->$field = $item->$field === 'active' ? 'inactive' : 'active';
		$item->save();

		return response()->json(['message' => 'Status updated successfully']);
	}

	public function itemDelete($model, $id)
	{
		$modelClass = "App\\Models\\$model";

		if (!class_exists($modelClass) || !$item = $modelClass::find($id)) {
			return back()->with('danger', 'Table or column not found.');
		}

		if (Schema::hasColumn($item->getTable(), 'image') && $item->image && file_exists(public_path($item->image))) {
			unlink(public_path($item->image));
		}

		$item->delete();
		return back()->with('success', "$model deleted successfully");
	}

	public function switch($branchId)
	{
		$branch = Branch::where('company_id', Auth::user()->company_id)
			->where('id', $branchId)
			->firstOrFail();

		session(['branch_id' => $branch->id]);

		return back()->with('success', 'Switched to branch ' . $branch->name);
	}

	// search code
	public function searchUser(Request $request)
    {
        $excludeId = $request->exclude_id ?? null;
        $q = trim($request->q);

        $query = User::whereIn('client_type', ['individual', 'organization']);

        if ($excludeId) {
            $query->where('id', '!=', $excludeId);
        }

        if ($q) {
            $query->where(function($qBuilder) use ($q) {
                $qBuilder->where('name', 'LIKE', "%{$q}%")
                         ->orWhere('email', 'LIKE', "%{$q}%")
                         ->orWhere('mobile', 'LIKE', "%{$q}%");
            });
        }

        $users = $query->take(10)->get(['id', 'name', 'email', 'country_code', 'mobile']);

        return response()->json($users);
    }

    public function getAddresses(User $user)
    {
        $addresses = Address::where('user_id', $user->id)
            ->get(['id', 'address', 'city', 'state']);
        return response()->json($addresses);
    }

	// Settings part
	public function profileSettings()
	{
		return view('settings.general_settings.profileSettings');
	}

	public function securitySettings()
	{
		return view('settings.general_settings.securitySettings');
	}

	public function notificationSettings()
	{
		return view('settings.general_settings.notificationSettings');
	}

	public function connectedApps()
	{
		return view('settings.general_settings.connectedApps');
	}	

	public function organizationSettings()
	{
		return view('settings.general_settings.organizationSettings');
	}

	public function bussinessSettings()
	{
		return view('settings.website_settings.bussinessSettings');
	}


	
}
