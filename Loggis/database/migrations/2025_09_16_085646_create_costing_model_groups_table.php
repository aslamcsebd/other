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
		Schema::create('costing_model_groups', function (Blueprint $table) {
			$table->id();

			$table->string('code');
			$table->string('name');
			$table->text('details')->nullable();

			$table->unsignedBigInteger('company_id');
			$table->enum('status', ['active', 'inactive'])->default('active');
			$table->unsignedBigInteger('created_by');
			$table->timestamps();
			$table->softDeletes();

			$table->unique(['company_id', 'code']);
			$table->unique(['company_id', 'name']);
		});

		$items = [
			[ 'code'   => 'FIFO', 'name'   => 'FIFO (First In First Out method)', 'details' => 'First In First Out method for inventory valuation', ],
			[ 'code'   => 'LIFO', 'name'   => 'LIFO (Last In First Out method)', 'details' => 'Last In First Out method for inventory valuation', ],
			[ 'code'   => 'WAVG', 'name'   => 'Weighted Average', 'details' => 'Weighted Average method for inventory valuation', ],
		];

		foreach ($items as $item) {
			DB::table('costing_model_groups')->insert([
				'code'        => $item['code'],
				'name'        => $item['name'],
				'details'     => $item['details'],

				'company_id'  => 1,
				'created_by'  => 1
			]);
		}
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('costing_model_groups');
	}
};
