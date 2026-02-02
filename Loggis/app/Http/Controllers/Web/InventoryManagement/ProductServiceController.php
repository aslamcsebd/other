<?php

namespace App\Http\Controllers\Web\InventoryManagement;

use App\Models\Uom;
use App\Models\HSCode;
use App\Models\Origin;
use App\Models\StorageGroup;
use Illuminate\Http\Request;
use App\Models\TrackingGroup;
use App\Models\ProductService;
use Illuminate\Validation\Rule;
use App\Models\CostingModelGroup;
use App\Http\Controllers\Controller;

class ProductServiceController extends Controller
{

    public function index()
    {
		$data['productService'] = ProductService::with([
			'storageGroup', 'trackingGroup', 'uom', 'costingModelGroup', 'origin', 'hscode'
		])->latest()->get();

		$data['productTypes'] = config('constants.product_types');
		$data['storageGroup'] = StorageGroup::latest()->get();
		$data['trackingGroup'] = TrackingGroup::latest()->get();		
		$data['uoms'] = Uom::latest()->get();
		$data['costingModelGroup'] = CostingModelGroup::latest()->get();		
		$data['origin'] = Origin::latest()->get();
		$data['hscode'] = HSCode::latest()->get();

		return view('inventory_management.product_service.index', $data);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
		$request->validate([
			'name' => [
				'required', 'max:255',
				Rule::unique('product_services')->where(fn($q) => 
					$q->where('company_id', auth()->user()->company_id)->where('type', $request->type)
				),
			],
			'type' => ['required'],
		]);

		ProductService::create($request->only([
			'name',
			'type', 
			'storage_group_id', 
			'tracking_group_id', 
			'uom_id', 
			'qty', 
			'costing_model_group_id', 
			'purchase_unit', 
			'sales_unit', 
			'inventory_unit', 
			'purchase_price', 
			'sales_price', 
			'tax', 
			'origin_id', 
			'hscode_id'
		]));
		return back()->with('success', 'Product service created successfully');
    }


    public function show(ProductService $productService)
    {
        //
    }

    
    public function edit(ProductService $productService)
    {
        //
    }

    
    public function update(Request $request, ProductService $productService)
    {
        //
    }

    
    public function destroy(ProductService $productService)
    {
        //
    }
}
