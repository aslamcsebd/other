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
        Schema::create('customer_groups', function (Blueprint $table) {
            $table->id();

			$table->string('manual_id');
		   	$table->string('name');
			$table->unsignedBigInteger('payment_term_id');
			$table->unsignedBigInteger('tax_group_id');

			$table->unsignedBigInteger('company_id');
			$table->enum('status', ['active', 'inactive'])->default('active');
            $table->unsignedBigInteger('created_by');
			$table->timestamps();
            $table->softDeletes();

			$table->unique(['company_id', 'manual_id']);
			$table->unique(['company_id', 'name']);
        });

		$items = ['Retail Customers', 'Corporate'];
		foreach ($items as $index => $item) {
			DB::table('customer_groups')->insert([
                'manual_id'       => 'CG-00' . ($index + 1),
                'name'            => $item,
                'payment_term_id' => rand(1, 2),
                'tax_group_id'    => rand(1, 2),
                'company_id'      => 1,
                'created_by'      => 1,
			]);
		}
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_groups');
    }
};
