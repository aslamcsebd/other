<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\HasCompanyAndUser;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductService extends Model
{
    use SoftDeletes, HasCompanyAndUser;
    protected $guarded = [];

	public function storageGroup()
	{
		return $this->belongsTo(StorageGroup::class);
	}

	public function trackingGroup()
	{
		return $this->belongsTo(TrackingGroup::class);
	}

	public function uom()
	{
		return $this->belongsTo(StorageGroup::class);
	}

	public function costingModelGroup()
	{
		return $this->belongsTo(CostingModelGroup::class);
	}

	public function origin()
	{
		return $this->belongsTo(Origin::class);
	}

	public function hscode()
	{
		return $this->belongsTo(HSCode::class);
	}
}
