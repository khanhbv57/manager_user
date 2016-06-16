<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\Http\Requests\TableRequest;
use Auth;
use App\Desk;
class TableController extends Controller
{
    public function getAdd(){
    	return view('admin.TableWork.add');
    }
    public function postAdd(TableRequest $request){
    	$tab = new Desk();
    	$tab->table_code = $request->txtCode;
    	$tab->table_phone = $request->txtPhone;
    	$tab->user_id = $request->txtuserid;
    	$tab->role_id = $request->txtRoleid;
    	$tab->save();
    	return redirect()->route('admin.TableWork.getlist')->with(['flash_level'=>'success','flash_message'=>'Thêm thành công !!']);

    }
    public function getList(){
        $tab = $tab = DB::table('desks')->join('employees','employees.User_id','=','desks.User_id')->join('roles','roles.id','=','desks.Role_id')->select('desks.table_code','desks.table_phone','employees.MaNV','employees.TenNV','roles.tenCD')->get();
        return view('admin.TableWork.list',compact('tab'));

    }
    public function getEdit(){

    }
    public function postEdit(){

    }
}
