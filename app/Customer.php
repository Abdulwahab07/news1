<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'customer_full_name',
        'customer_address',
        'contact_number',
        'working_at',
        'date_of_birth',
        'customer_gender',
        'balance',
        'favoraited_contact_method'
    ];

    protected $dates = ['deleted_at'];
}
