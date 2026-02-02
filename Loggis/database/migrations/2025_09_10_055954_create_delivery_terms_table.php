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
        Schema::create('delivery_terms', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->text('details')->nullable();
            $table->enum('cash_on_delivery', ['yes', 'no'])->default('yes');

            $table->unsignedBigInteger('company_id');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->unsignedBigInteger('created_by');
            $table->timestamps();
            $table->softDeletes();

            $table->unique(['company_id', 'name']);
        });

        $items = ['Standard Delivery', 'Express Delivery'];
        foreach ($items as $item) {
            DB::table('delivery_terms')->insert([
                'name'             => $item,
                'details'          => 'This is ' . $item . ' description',
                'cash_on_delivery' => rand(0, 1) ? 'yes' : 'no',
                
                'company_id'       => 1,
                'created_by'       => 1,
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delivery_terms');
    }
};
