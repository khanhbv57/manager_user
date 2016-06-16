<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'departments';
    protected $fillable = [
        'TenPB'
    ];
    public function employees(){
    	return $this->hasMany('App\Employee','PB_id');
    }
}
