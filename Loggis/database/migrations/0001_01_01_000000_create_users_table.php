<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
		Schema::create('users', function (Blueprint $table) {
			$table->id();
			
			$table->string('name');
			$table->string('email')->unique();
            
			$table->string('client_type')->nullable();
			$table->string('country_code')->nullable();
			$table->string('mobile')->nullable();

			$table->unsignedBigInteger('company_id');
			$table->enum('status', ['active', 'inactive'])->default('active');
			$table->unsignedBigInteger('created_by');

			// $table->foreignId('company_id')->nullable();
			// $table->string('role', 20)->nullable();
			// $table->string('status', 20)->default('active');
            
			$table->string('password');
			$table->timestamp('email_verified_at')->nullable();
			$table->rememberToken();		

			$table->timestamps();
			$table->softDeletes();
		});

		$roles = ['admin', 'bd', 'uae'];
		
        foreach($roles as $role){
            DB::table('users')->insert([
                'name' => $role . ' user',
                'email' => $role . '@gmail.com',
                'password' => Hash::make('123456'),
				
                'client_type' => '',
                'country_code' => '',
                'mobile' => '',

                // 'role' => $role
                'company_id'  => 1,
				'created_by'  => 1
            ]);
        }

        for ($i = 1; $i <= 4; $i++) {
            DB::table('users')->insert([
                'name' => 'user' .$i,
                'email' => 'user' .$i. '@gmail.com',
                'password' => Hash::make('123456'),
				
                'client_type' => rand(0,1) ? 'individual' : 'organization',
                'country_code' => '+971',
                'mobile' => '0123456' .$i,

                'company_id' => rand(1, 3),
				'created_by'  => 1
            ]);
        }

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
