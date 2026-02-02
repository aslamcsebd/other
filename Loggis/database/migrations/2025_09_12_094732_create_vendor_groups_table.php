<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vendor_groups', function (Blueprint $table) {
            $table->id();

			$table->string('name');
			$table->unsignedBigInteger('payment_term_id');
			$table->unsignedBigInteger('tax_group_id');

			$table->unsignedBigInteger('company_id');
			$table->enum('status', ['active', 'inactive'])->default('active');
            $table->unsignedBigInteger('created_by');
			$table->timestamps();
            $table->softDeletes();

			$table->unique(['company_id', 'name']);
			$table->unique(['company_id', 'payment_term_id']);
			$table->unique(['company_id', 'tax_group_id']);
        });

		$items = ['Local Suppliers', 'Service Providers'];
		foreach ($items as $index => $item) {
			DB::table('vendor_groups')->insert([
                'name'            => $item,
                'payment_term_id' => ($index + 1),
                'tax_group_id'    => ($index + 1),
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
        Schema::dropIfExists('vendor_groups');
    }
};
