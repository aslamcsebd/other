<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\HasCompanyAndUser;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    // use SoftDeletes, HasCompanyAndUser;
    protected $guarded = [];

    protected $appends = ['company_name'];
    public function getCompanyNameAttribute()
    {
        return config('constants.company.' . $this->company_id, 'Unknown');
    }

}
