<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\searchRequest;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use DB;
use App\Role;


class searchController extends Controller
{
    public function search(){
    
    
    $manv = Input::get('manv');
    
    if($manv != null) 
    	$results = DB::table('desks')->join('roles','roles.id','=','desks.role_id')->join('users','users.id','=','desks.user_id')->join('employees','employees.id','=','desks.user_id')->select('desks.table_code','desks.table_phone','roles.tenCD','employees.TenNV','employees.MaNV')->where('employees.MaNV', 'like', '%'.$manv.'%')->get();
    return view('welcome',compact('results'));
    
    }
}
