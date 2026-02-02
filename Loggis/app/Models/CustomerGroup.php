<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\HasCompanyAndUser;
use Illuminate\Database\Eloquent\SoftDeletes;

class CustomerGroup extends Model
{
    use SoftDeletes, HasCompanyAndUser;
    protected $guarded = [];

	public function paymentTerm()
	{
		return $this->belongsTo(PaymentTerm::class);
	}

	public function taxGroup()
	{
		return $this->belongsTo(TaxGroup::class);
	}
}
