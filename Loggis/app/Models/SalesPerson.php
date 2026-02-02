<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\HasCompanyAndUser;
use Illuminate\Database\Eloquent\SoftDeletes;

class SalesPerson extends Model
{
    use SoftDeletes, HasCompanyAndUser;
    protected $guarded = [];
	
	public function customerGroup()
	{
		return $this->belongsTo(CustomerGroup::class);
	}
}
