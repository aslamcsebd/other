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
        Schema::create('sales_people', function (Blueprint $table) {	
            $table->id();

			$table->string('name');
			$table->string('employee_no');
			$table->string('email')->unique();
			$table->string('phone');
			$table->string('job_title');
			$table->unsignedBigInteger('manager_id');
			$table->decimal('commission', 8, 2)->default(0.00);
			$table->string('department_code');
			$table->unsignedBigInteger('customer_group_id');

			$table->unsignedBigInteger('company_id');
			$table->enum('status', ['active', 'inactive'])->default('active');
            $table->unsignedBigInteger('created_by');
			$table->timestamps();
            $table->softDeletes();

			$table->unique(['company_id', 'employee_no']);
			$table->unique(['company_id', 'email']);
			$table->unique(['company_id', 'phone']);
        });

		$items = ['emp1', 'emp2'];
		foreach ($items as $index => $item) {
			DB::table('sales_people')->insert([
                'name'              => 'Employee_' .($index+1). ' name',
                'employee_no'       => 'Emp-0' .($index + 1),
                'email'             => $item. '@gmail.com',
                'phone'      => '+971 234564' .($index + 1),
                'job_title'         => 'Job name' .($index + 1),
                'manager_id'        => ($index + 1),
                'commission'        => rand(2, 10),
                'department_code'   => 'code-' .($index + 1),
                'customer_group_id' => rand(1, 2),
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
        Schema::dropIfExists('sales_people');
    }
};
