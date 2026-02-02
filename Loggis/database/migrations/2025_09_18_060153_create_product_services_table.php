<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_services', function (Blueprint $table) {
		   	$table->id();

			$table->string('name');
			$table->string('type');
			$table->unsignedBigInteger('storage_group_id'); 
			$table->unsignedBigInteger('tracking_group_id'); 
			$table->unsignedBigInteger('uom_id');
			$table->string('qty');
			$table->unsignedBigInteger('costing_model_group_id');
			$table->string('purchase_unit');
			$table->string('sales_unit');
			$table->string('inventory_unit');
			$table->string('purchase_price');
			$table->string('sales_price');
			$table->string('tax');
			$table->unsignedBigInteger('origin_id');
			$table->unsignedBigInteger('hscode_id');

			$table->unsignedBigInteger('company_id');
			$table->enum('status', ['active', 'inactive'])->default('active');
			$table->unsignedBigInteger('created_by');
			$table->timestamps();
			$table->softDeletes();

			// ✅ Enforce uniqueness of (company, name, type)
    		$table->unique(['company_id', 'name', 'type']);
			/*
			Example 1: Product vs Service both called “Hosting”
			Product: “Hosting” → a physical VPS server package.
			Service: “Hosting” → the managed support service for that server.
			👉 Same name, but one is something you buy (product), the other is what the company provides on top (service).
			*/
		});

		$items = [
			[ 'name'   => 'New laptop', 'type'   => 'product' ],
			[ 'name'   => 'Laptop\'s change battery', 'type'   => 'service' ],
		];

		foreach ($items as $item) {
			DB::table('product_services')->insert([
                'name'                   => $item['name'],
                'type'                   => $item['type'],
                'storage_group_id'       => rand(1, 2),
                'tracking_group_id'      => rand(1, 2),
                'uom_id'                 => rand(1, 2),
                'qty'                    => rand(10, 20),
                'costing_model_group_id' => rand(1, 2),
                'purchase_unit'          => rand(5, 10),
                'sales_unit'             => rand(1, 5),
                'inventory_unit'         => rand(1, 5),
                'purchase_price'         => rand(80, 95),
                'sales_price'            => rand(100, 200),
                'tax'                    => rand(5, 10),
                'origin_id'              => rand(1, 2),
                'hscode_id'              => rand(1, 2),

                'company_id'             => 1,
                'created_by'             => 1
			]);
		}
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_services');
    }
};
