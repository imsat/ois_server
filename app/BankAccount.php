<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BankAccount extends Model
{
    protected $guarded = [];

    use SoftDeletes;

    public function financialOrganization()
    {
        return $this->belongsTo(FinancialOrganization::class, 'financial_organization_id');
    }
}
