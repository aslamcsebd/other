<?php

namespace App\Http\Controllers\Web\SalesManagement\Customer;

use App\Models\User;
use App\Models\Client;
use App\Models\Address;
use App\Models\Currency;
use App\Models\PaymentTerm;
use App\Models\SalesPerson;
use App\Models\DeliveryTerm;
use Illuminate\Http\Request;
use App\Models\CustomerGroup;
use App\Models\PaymentMethod;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
	public function index()
	{
		$data['clients'] = User::with(['client'])
		->whereNotNull('client_type')
		->where('client_type', '!=', '')
		->latest()
		->get();

		$data['client_types'] = config('constants.client_types');
		$data['legal_entity'] = config('constants.legal_entity');
		$data['company'] = config('constants.company');
		$data['customerGroup'] = CustomerGroup::latest()->get();
		$data['language'] = config('constants.language');
		$data['currency'] = Currency::latest()->get();
		$data['salesPerson'] = SalesPerson::latest()->get();
		$data['deliveryTerm'] = DeliveryTerm::latest()->get();
		$data['paymentTerm'] = PaymentTerm::latest()->get();
		$data['paymentMethod'] = PaymentMethod::latest()->get();
		$data['upsZone'] = config('constants.ups_zone');

		return view('sales_management.customer.index', $data);
	}


	public function create()
	{
		//
	}

	public function store(Request $request)
	{
		$request->validate([
			'client_type'        => 'required|string',
			'legal_entity_id'    => 'required|integer',
			'company_id'         => 'required|integer',
			'name'               => 'required|string|max:255',
			'country_code'       => 'required|string',
			'mobile'             => 'nullable|string|max:20',
			'email'              => 'required|email|unique:users,email',
			'password'           => 'required|string|min:6',
			'customer_group_id'  => 'required|integer',
			'language_id'        => 'required|integer',
			'currency_id'        => 'required|integer',
			'delivery_term_id'   => 'required|integer',
			'payment_term_id'    => 'required|integer',
			'payment_method_id'  => 'required|integer',
			'sales_person_id'    => 'required|integer',
			'ups_zone_id'        => 'required|integer',
		]);

		// User
		$user = User::create([
			'name'  => $request->name,
			'email'       => $request->email,
			'password' =>  Hash::make($request->password),
			'client_type'      => $request->client_type,
			'country_code'      => $request->country_code,
			'mobile' => $request->mobile
		]);

		// Client
		$client = $request->only([
			'legal_entity_id',
			'company_id',
			'customer_group_id',
			'language_id',
			'currency_id',
			'delivery_term_id',
			'payment_term_id',
			'payment_method_id',
			'sales_person_id',
			'ups_zone_id',
		]);
		$client['user_id'] = $user->id;
		Client::create($client);

		// Address
		foreach ($request->address as $i => $addr) {
			$data = [
				'user_id'     => $user->id,
				'country'     => $request->country[$i] ?? null,
				'state'       => $request->state[$i] ?? null,
				'city'        => $request->city[$i] ?? null,
				'postal_code' => $request->postal[$i] ?? null,
				'address'     => $addr ?? null,
			];

			// check if at least one field is filled
			if (collect($data)->except('user_id')->filter()->isNotEmpty()) {
				Address::create($data);
			}
		}

		return back()->with('success', 'Client created successfully');
	}


	public function show(Client $client)
	{
		//
	}


	public function edit(Client $client)
	{
		//
	}


	public function update(Request $request, Client $client)
	{
		//
	}


	public function destroy(Client $client)
	{
		//
	}
}
