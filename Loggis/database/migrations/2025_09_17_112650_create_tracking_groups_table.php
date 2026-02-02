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
        Schema::create('tracking_groups', function (Blueprint $table) {
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
			[ 'code'   => 'AIR', 'name'   => 'Air Freight Tracking' ],
			[ 'code'   => 'COURIER', 'name'   => 'Courier Tracking' ],
			[ 'code'   => 'SEA', 'name'   => 'Sea Cargo Tracking' ],
		];

		foreach ($items as $item) {
			DB::table('tracking_groups')->insert([
				'code'        => $item['code'],
				'name'        => $item['name'],
				'details'     => 'This is ' .$item['name']. ' details',

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
        Schema::dropIfExists('tracking_groups');
    }
};
