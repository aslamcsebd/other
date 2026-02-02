<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\HasCompanyAndUser;
use Illuminate\Database\Eloquent\SoftDeletes;

class CostingModelGroup extends Model
{
    use SoftDeletes, HasCompanyAndUser;
    protected $guarded = [];
}
