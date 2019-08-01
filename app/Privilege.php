<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Privilege extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'privilege_name',
        'privilege_code'
    ];

    protected $dates = ['deleted_at'];

    public function role(){
        return $this->belongsToMany(Role::class , 'role_privileges',
            'privilege_id',
            'role_id');
    }
}
