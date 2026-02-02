<?php

return [
	'product_types' => [
		'product',
		'service',
	],

	'client_types' => [
		'Individual',
		'Organization',
	],

	'legal_entity' => [
		'Private Limited Company (Ltd.)',
		'Public Limited Company (PLC)',
		'Joint Venture Company (JVC)',
		'Non-Governmental Organization (NGO)'
	],	

	'company' => [
        1 => 'A company name',
        2 => 'B company name',
        3 => 'C company name',
        4 => 'D company name',
    ],

	'language' => [
		'English',
		'Arabic',
		'Hindi',
		'China',
	],

	'ups_zone' => [
		'Zone 1',
		'Zone 2',
		'Zone 3',
		'Zone 4',
	],	

    'genders' => [
        'male'   => 'Male',
        'female' => 'Female',
        'other'  => 'Other',
    ],
];

/*
| ID | Company Name              | Legal Entity              |
| -- | ------------------------- | ------------------------- |
| 1  | Supreme Global BD Ltd.    | Private Limited Company   |
| 2  | ABC Technologies PLC      | Public Limited Company    |
| 3  | Rahim Traders             | Sole Proprietorship       |
| 4  | Green Agro Industries LLP | Limited Liability Partner |
| 5  | Care Foundation           | NGO                       |


📌 Best table name options

companies → ✅ most standard, simple, and clear
company_master → ✅ if you want to emphasize it’s a master lookup table
organizations → ✅ if you plan to store NGOs, trusts, etc., not just companies

⚖️ Recommendation (Best Practice in Laravel/Eloquent):
👉 Use companies (plural, snake_case).

Schema::create('legal_entities', function (Blueprint $table) {
    $table->id();
    $table->string('name'); // e.g., Private Ltd, PLC, NGO
    $table->timestamps();
});

Schema::create('companies', function (Blueprint $table) {
    $table->id();
    $table->string('name'); // Company Name
    $table->foreignId('legal_entity_id')->constrained('legal_entities'); // link to legal_entities table
    $table->timestamps();
});

*/