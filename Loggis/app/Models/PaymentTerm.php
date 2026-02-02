<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\HasCompanyAndUser;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaymentTerm extends Model
{
    use SoftDeletes, HasCompanyAndUser;
    protected $guarded = [];

	public function paymentMethod()
	{
		return $this->belongsTo(PaymentMethod::class);
	}
}
