<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'role_name',
        'role_code'
        ];

    protected $dates = ['deleted_at'];

    public function users(){
        return $this->hasMany(User::class);
    }

    public function privileges(){
        return $this->belongsToMany(Privilege::class,'role_privileges',
            'role_id',
        'privilege_id');

    }

}
