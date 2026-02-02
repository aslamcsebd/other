<?php

namespace App\Models\Traits;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

trait HasCompanyAndUser
{
    protected static function bootHasCompanyAndUser()
    {
        static::creating(function ($model) {
            $model->company_id = Auth::user()->company_id ?? 1;
            $model->created_by = Auth::id();
        });

        // static::updating(function ($model) {
        //     $model->updated_by = Auth::id();
        // });
    }

	public static function uniqueForCompany(string $column)
	{
		$companyId = Auth::user()->company_id ?? 1;
		return Rule::unique((new static)->getTable())->where(fn($q) => $q->where('company_id', $companyId));
	}

	public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
