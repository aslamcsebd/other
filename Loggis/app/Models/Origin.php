<?php

namespace App\Models;

use App\Models\Traits\HasCompanyAndUser;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Origin extends Model
{
	use SoftDeletes, HasCompanyAndUser;
    protected $guarded = [];   
}
