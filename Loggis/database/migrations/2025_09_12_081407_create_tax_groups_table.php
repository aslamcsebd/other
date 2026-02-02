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
        Schema::create('tax_groups', function (Blueprint $table) {
			$table->id();

		   	$table->string('name');

			$table->unsignedBigInteger('company_id');
			$table->enum('status', ['active', 'inactive'])->default('active');
            $table->unsignedBigInteger('created_by');
			$table->timestamps();
            $table->softDeletes();

			$table->unique(['company_id', 'name']);
        });

		$items = ['Standard VAT 15%', 'Reduced VAT 5%'];
		foreach ($items as $index => $item) {
			DB::table('tax_groups')->insert([
                'name'   => $item,
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
        Schema::dropIfExists('tax_groups');
    }
};
