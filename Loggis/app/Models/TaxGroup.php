<?php

namespace App\Models;

use App\Models\Traits\HasCompanyAndUser;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class TaxGroup extends Model
{
    use SoftDeletes, HasCompanyAndUser;
    protected $guarded = [];
}
