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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
			
			$table->unsignedBigInteger('user_id');
			$table->unsignedBigInteger('legal_entity_id');
			$table->unsignedBigInteger('company_id');
			$table->unsignedBigInteger('customer_group_id');
			$table->unsignedBigInteger('language_id');
			$table->unsignedBigInteger('currency_id');
			$table->unsignedBigInteger('delivery_term_id');
			$table->unsignedBigInteger('payment_term_id');
			$table->unsignedBigInteger('payment_method_id');
			$table->unsignedBigInteger('sales_person_id');
			$table->unsignedBigInteger('ups_zone_id');

            $table->timestamps();
        });

		for ($i = 1; $i <=7; $i++) {
            DB::table('clients')->insert([
                'user_id' => $i,
                'legal_entity_id' => rand(1, 4),
                'company_id' => rand(1, 4),				
                'customer_group_id' => rand(1, 2),
                'language_id' => rand(1, 4),
                'currency_id' => rand(1, 2),
                'delivery_term_id' => rand(1, 2),
                'payment_term_id' => rand(1, 2),
                'payment_method_id' => rand(1, 2),
                'sales_person_id' => rand(1, 2),
                'ups_zone_id' => rand(1, 4),
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
