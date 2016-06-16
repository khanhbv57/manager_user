<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	protected $table = 'roles';
	protected $fillable = [
        'tenCD'
    ];
    public function employees(){
    	return $this->hasMany('App\Employee','Role_id');
    }
    public function desk(){
    	return $this->hasOne('App\Desk','role_id');
    }
}
