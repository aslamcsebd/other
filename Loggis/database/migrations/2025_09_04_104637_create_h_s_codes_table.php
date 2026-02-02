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
        Schema::create('h_s_codes', function (Blueprint $table) {
            $table->id();
			
            $table->string('hs_code');
            $table->string('name');
			$table->foreignId('uom_id')->constrained('uoms')->onDelete('cascade');

			$table->unsignedBigInteger('company_id');
			$table->enum('status', ['active', 'inactive'])->default('active');
            $table->unsignedBigInteger('created_by');
			$table->timestamps();
            $table->softDeletes();

			$table->unique(['company_id', 'hs_code']);
			$table->unique(['company_id', 'name']);
        });

		$items = ['Coffee, not roasted', 'Cane or beet sugar'];		
        foreach($items as $index => $item){	
            DB::table('h_s_codes')->insert([
                'hs_code' => rand(1000, 10000) .($index + 1),
                'name' => $item,
				'uom_id' => rand(1, 2),
				'company_id' => 1,
    			'created_by' => 1,
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('h_s_codes');
    }
};
