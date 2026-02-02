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
		Schema::create('currencies', function (Blueprint $table) {
			$table->id();

			$table->string('code');
			$table->string('name');
			$table->string('rate');

			$table->unsignedBigInteger('company_id');
			$table->enum('status', ['active', 'inactive'])->default('active');
			$table->unsignedBigInteger('created_by');
			$table->timestamps();
			$table->softDeletes();

			$table->unique(['company_id', 'code']);
			$table->unique(['company_id', 'name']);
		});

		$items = [
			'USD' => ['name' => 'US Dollar', 'rate' => 1.00],
			'JPY' => ['name' => 'Japanese Yen', 'rate' => 145.30],
		];

		foreach ($items as $code => $data) {
			DB::table('currencies')->insert([
				'code'       => $code,
				'name'       => $data['name'],
				'rate'       => $data['rate'],
				'company_id' => 1,
				'created_by' => 1
			]);
		}
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('currencies');
	}
};
