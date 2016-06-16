<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Desk extends Model
{
    protected $table = 'desks';

    protected $fillable = [
        'table_code', 'table_phone', 'User_id','role_id'
    ];
    public $timestamps = true;
    public function employee(){
    	return $this->belongsTo('App\Employee','User_id');
    }
    public function role(){
    	return $this->belongsTo('App\Role','id');
    }
    public function getEmployee($User_id){
        return Employee::find($User_id);
    }
}
