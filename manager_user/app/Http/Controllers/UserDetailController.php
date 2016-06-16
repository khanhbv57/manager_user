<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserDetailRequest;
use App\Employee;
use Hash;
use App\Role;
use App\Department;
use DB;

class UserDetailController extends Controller
{
    public function getList(){
        $user = DB::table('employees')->join('users','users.id','=','employees.User_id')->join('departments','departments.id','=','employees.PB_id')->join('roles','roles.id','=','employees.Role_id')->select('employees.MaNV','employees.TenNV','employees.GT','employees.Ngay_sinh','employees.Dien_thoai','employees.email','roles.tenCD','departments.TenPB')->get();
        return view('admin.user.list',compact('user'));
    }

    public function getAdd(){
        $roles = Role::all();
        $departments = Department::all();
    	return view('admin.user.add')->with([
                'chucdanh' =>$roles,
                'phongban' =>$departments,
            ]);

    }
    
    public function postAdd(UserDetailRequest $request){
        $tabl = new Employee();
        $tabl->MaNV = $request->txtMaNV;
        $tabl->TenNV = $request->txthoten;
        $tabl->GT = $request->txtgioitinh;
        $tabl->Ngay_sinh = $request->txtngaysinh;
        $tabl->Dien_thoai = $request->txtphone;
        $tabl->email = $request->txtemail;
        $tabl->User_id = $request->txtUserId;
        $tabl->PB_id = $request->txtRoom;
        $tabl->Role_id = $request->txtRoleId;

        $tabl->save();
        return redirect()->route('admin.user.getlist')->with(['flash_level'=>'success','flash_message'=>'Thêm thành công !!']);
 
    }
    public function getProfile(){
        return view('admin/user/profile');
    }

    public function getDelete(){
        
    }
    
    public function getEdit($id){
        $data = User::find($id);
        return view('admin.user.edit',compact('data'));
    }
    
    public function postEdit(){
       

    }
    
}
