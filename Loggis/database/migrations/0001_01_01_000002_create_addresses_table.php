<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Faker\Factory as Faker;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();

			$table->unsignedBigInteger('user_id');

			$table->string('country')->nullable();
			$table->string('state')->nullable();
			$table->string('city')->nullable();
			$table->string('postal_code')->nullable();
			$table->string('address')->nullable();

            $table->timestamps();
        });

		$faker = Faker::create();

		for ($i = 1; $i <=7; $i++) {
			DB::table('addresses')->insert([
				'user_id' => $i,
				'country' => $faker->country,
				'state' => $faker->state,
				'city' => $faker->city,
				'postal_code' => $faker->postcode,
				'address' => $faker->streetAddress,
			]);
		}
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
