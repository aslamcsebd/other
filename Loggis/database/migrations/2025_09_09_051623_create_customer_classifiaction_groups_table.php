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
		Schema::create('customer_classifiaction_groups', function (Blueprint $table) {
			$table->id();

			$table->string('manual_id');
			$table->string('name');
			$table->text('details')->nullable();

			$table->unsignedBigInteger('company_id');
			$table->enum('status', ['active', 'inactive'])->default('active');
			$table->unsignedBigInteger('created_by');
			$table->timestamps();
			$table->softDeletes();

			$table->unique(['company_id', 'manual_id']);
			$table->unique(['company_id', 'name']);
		});

		$items = ['Retail Customers', 'Wholesale'];
		foreach ($items as $index => $item) {
			DB::table('customer_classifiaction_groups')->insert([
                'manual_id'   =>  'CCG-00' . ($index + 1),
                'name'        => $item,
                'details' => 'This is ' . $item . ' description',
                'company_id'  => 1,
                'created_by'  => 1,
			]);
		}
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('customer_classifiaction_groups');
	}
};
