<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\DashboardController;
use App\Http\Controllers\Web\OrganizationSetup\Inventory\UOMController;
use App\Http\Controllers\Web\SalesManagement\Customer\ClientController;
use App\Http\Controllers\Web\OrganizationSetup\Sales\CurrencyController;
use App\Http\Controllers\Web\OrganizationSetup\Sales\TaxGroupController;
use App\Http\Controllers\Web\InventoryManagement\ProductServiceController;
use App\Http\Controllers\Web\OrganizationSetup\Inventory\HSCodeController;
use App\Http\Controllers\Web\OrganizationSetup\Inventory\OriginController;
use App\Http\Controllers\Web\OrganizationSetup\Shipment\CountryController;
use App\Http\Controllers\Web\OrganizationSetup\Sales\PaymentTermController;
use App\Http\Controllers\Web\OrganizationSetup\Sales\SalesPersonController;
use App\Http\Controllers\Web\OrganizationSetup\Sales\DeliveryTermController;
use App\Http\Controllers\Web\OrganizationSetup\Shipment\TerritoryController;
use App\Http\Controllers\Web\OrganizationSetup\Sales\CustomerGroupController;
use App\Http\Controllers\Web\OrganizationSetup\Sales\PaymentMethodController;
use App\Http\Controllers\Web\OrganizationSetup\Inventory\StorageGroupController;
use App\Http\Controllers\Web\OrganizationSetup\Shipment\TrackingGroupController;
use App\Http\Controllers\Web\OrganizationSetup\Procurement\VendorGroupController;
use App\Http\Controllers\Web\OrganizationSetup\Procurement\CostingModelGroupController;
use App\Http\Controllers\Web\OrganizationSetup\Sales\CustomerClassifiactionGroupController;

Auth::routes();

Route::get('/', function () {
	if (Auth::check()) {
		return redirect()->route('dashboard');
	}
	return view('auth.login');
	// redirect()->route('login');
});

Route::middleware(['auth'])->group(function() {
    require __DIR__ . '/web/dashboard.php';
});

Route::fallback(function () {
	return view(404);
});

Route::controller(DashboardController::class)->group(function () {

    Route::get('/switch-branch/{branch}', 'switch')->name('switch.branch');

    Route::get('/admin-dashboard', 'adminDashboard')->name('dashboard');
    Route::get('/employee-dashboard', 'employeeDashboard');
    Route::get('/deals-dashboard', 'dealsDashboard');
    Route::get('/leads-dashboard', 'leadsDashboard');
    
	Route::get('/chat', 'chat');
	Route::get('/email', 'email');
	Route::get('/calendar', 'calendar');
	Route::get('/to-do', 'todo');

    Route::get('/vendor', 'vendor');
    Route::get('/lead', 'lead');	

    Route::get('/shipment-list', 'shipmentList');
    Route::get('/shipments', 'shipments');
    Route::get('/boe-list', 'boeList');
    Route::get('/boe-create', 'boeCreate');
    Route::get('/invoice', 'invoice');
    
	Route::get('/customer-group', 'customerGroup');
	Route::get('/customer-classifiaction', 'customerClass');
	Route::get('term-of-payment', 'termPayment');
	Route::get('method-of-payment', 'methodPayment');
	Route::get('term-of-delivery', 'termDelivery');
	Route::get('vendor-group', 'vendorGroup');

	Route::get('status', 'status')->name('status');
	Route::get('itemDelete/{model}/{id}', 'itemDelete')->name('itemDelete');


	// Settings part
	Route::get('profile-settings', 'profileSettings');
	Route::get('security-settings', 'securitySettings');
	Route::get('notification-settings', 'notificationSettings');
	Route::get('connected-apps', 'connectedApps');
	Route::get('organization-settings', 'organizationSettings');
	
	// Website seetings
	Route::get('bussiness-settings', 'bussinessSettings');
	
	Route::get('seo-settings', 'seoSettings');
	Route::get('localization-settings', 'localization-settings');
	Route::get('prefixes', 'localization-settings');
	Route::get('preferences', 'localization-settings');
	Route::get('appearance', 'localization-settings');
	Route::get('language', 'localization-settings');
	Route::get('authentication-settings', 'localization-settings');
	Route::get('ai-settings', 'aiSettings');
});

Route::prefix('sales-management')->group(function () { 
	// Sales Management
	Route::prefix('customer')->group(function () {
        Route::resource('client', ClientController::class);
    });
});

Route::prefix('organization-setup')->group(function () {
    // --- Sales ---
    Route::prefix('sales')->group(function () {
        Route::resource('customer-group', CustomerGroupController::class);
        Route::resource('payment-methods', PaymentMethodController::class);
        Route::resource('delivery-term', DeliveryTermController::class);
        Route::resource('payment-term', PaymentTermController::class);
        Route::resource('currency', CurrencyController::class);
        Route::resource('customer-classifiaction-groups', CustomerClassifiactionGroupController::class);
        Route::resource('tax-group', TaxGroupController::class);
        Route::resource('sales-person', SalesPersonController::class);
    });

	// Procurement
	Route::prefix('procurement')->group(function () {
        Route::resource('vendor-group', VendorGroupController::class);
        Route::resource('costing-model-group', CostingModelGroupController::class);		
    });

    // --- Inventory ---
    Route::prefix('inventory')->group(function () {
        Route::resource('uom', UOMController::class);
        Route::resource('origin', OriginController::class);
        Route::resource('hs-codes', HSCodeController::class);
        Route::resource('storage-group', StorageGroupController::class);		
    });

    // --- Shipment ---
    Route::prefix('shipment')->group(function () {
        Route::resource('territory', TerritoryController::class);
        Route::resource('country', CountryController::class);
        Route::resource('tracking-group', TrackingGroupController::class);		
    });
});

Route::prefix('inventory-management')->group(function () {
    // --- product-service ---
	Route::resource('product-service', ProductServiceController::class);
});

// routes/web.php
Route::get('/search-user', [DashboardController::class, 'searchUser'])->name('search.user');
Route::get('/get-addresses/{user}', [DashboardController::class, 'getAddresses'])->name('get.addresses');
