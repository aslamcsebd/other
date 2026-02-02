<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Traits\HasCompanyAndUser;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
	use HasFactory, Notifiable, SoftDeletes, HasCompanyAndUser;

	// protected $fillable = [
	// 	'name',
	// 	'email',
	// 	'password',
	// 	'role',
	// 	'status',
	// 	'deleted_at',
	// 	'company_id'
	// ];
	protected $guarded = []; 

	protected $hidden = [
		'password',
		'remember_token',
	];

	protected function casts(): array
	{
		return [
			'email_verified_at' => 'datetime',
			'password' => 'hashed',
		];
	}

	public function company()
	{
		return $this->belongsTo(Company::class);
	}

	public function branches()
	{
		return $this->company ? $this->company->branches() : collect();
	}

	// User, Client, Address
	protected $appends = ['full_number'];

    public function getFullNumberAttribute()
    {
        return ($this->country_code ?? '') .' '. ($this->mobile ?? '');
    }

	public function client()
	{
		return $this->hasOne(Client::class);
	}

	public function address()
	{
		return $this->hasOne(Address::class);
	}
}