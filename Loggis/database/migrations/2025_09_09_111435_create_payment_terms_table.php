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
        Schema::create('payment_terms', function (Blueprint $table) {
           $table->id();

		   	$table->string('name');
			$table->unsignedBigInteger('payment_method_id');
			$table->unsignedTinyInteger('month')->nullable();
            $table->unsignedSmallInteger('days')->nullable();
			$table->enum('is_default', ['yes', 'no'])->default('yes');

			$table->unsignedBigInteger('company_id');
			$table->enum('status', ['active', 'inactive'])->default('active');
            $table->unsignedBigInteger('created_by');
			$table->timestamps();
            $table->softDeletes();

			$table->unique(['company_id', 'name']);
        });

		$items = ['Cash on Delivery', '15 Days After Invoice'];
		foreach ($items as $item) {
			DB::table('payment_terms')->insert([
                'name'              => $item,
                'payment_method_id' => rand(1, 2),
                'month'             => rand(1, 2),
                'days'              => rand(10, 20),
                'is_default'        => rand(0, 1) ? 'yes' : 'no',
                
                'company_id'        => 1,
                'created_by'        => 1,
			]);
		}
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_terms');
    }
};
