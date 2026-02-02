<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\HasCompanyAndUser;

class HSCode extends Model
{
    use SoftDeletes, HasCompanyAndUser;
    protected $guarded = [];
	
	public function uom()
	{
		return $this->belongsTo(Uom::class);
	}
}
