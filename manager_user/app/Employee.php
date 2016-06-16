<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    protected $fillable = [
        'MaNV', 'TenNV', 'GT','Ngay_sinh','Dien_thoai','email','User_id','Role_id','PB_id'
    ];
    public $timestamps = true;
    public function department(){
    	return $this->belongsTo('App\Department','id');
    }
    public function desk(){
    	return $this->hasOne('App\Desk','User_id');
    }
    public function role(){
    	return $this->belongsTo('App\Role','id');
    }
    public function user(){
    	return $this->belongsTo('App\User','id');
    }
    
    public function getDesk(){
        
        return Desk::where('User_id', $this->User_id)->first();
        }
    public function getRole(){
        return Role::where('id', $this->Role_id)->first();
    }
   
}
