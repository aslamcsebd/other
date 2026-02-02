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
        Schema::create('branches', function (Blueprint $table) {
            $table->id();
			$table->foreignId('company_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('data');
            $table->timestamps();
        });

		$branches = [
			1 => ['Dhaka (BD)', 'Sylhet (BD)'],
			2 => ['Abu Dhabi (UAE)', 'Sharjah (UAE)'],
		];

		foreach($branches as $company_id => $branch_list) {
			foreach($branch_list as $branch_name) {
				DB::table('branches')->insert([
					'company_id' => $company_id,
					'name' => $branch_name,
					'data' => rand(10,50),
				]);
			}
		}
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('branches');
    }
};
