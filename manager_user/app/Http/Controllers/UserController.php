<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\User;
use Hash;
use DB;
use Validator;
use Session;

class UserController extends Controller
{
    public function getList(){
        $user = User::all();
    	return view('admin.Account.list',compact('user'));

    }

    public function getAdd(){
        return view('admin.Account.add');

    }
    
    public function postAdd(UserRequest $request){
    	$user = new User();
    	$user->username = $request->txtUser;
    	$user->password = Hash::make($request->txtPass);
    	$user->email = $request->txtEmail;
    	$user->level = $request->rdoLevel;
    	$user->remember_token = $request->_token;
    	$user->save();
    	return redirect()->route('admin.Account.getlist')->with(['flash_level'=>'success','flash_message'=>'Thêm thành công !!']);

    }
    
    public function getDelete($id){
        $user_current_login = Auth::user()->id;
        $user = User::find($id);
        if(($id == 1)||($user_current_login != 1 && $user["level"] == 1)){
            return redirect()->route('admin.Account.getlist')->with(['flash_level'=>'danger','flash_message'=>'Bạn không thể xóa User này']);
        }else{
            $user->delete($id);
            return redirect()->route('admin.Account.getlist')->with(['flash_level'=>'uccess','flash_message'=>'Xóa thành công']);
        }
    }
    
    public function getEdit($id){
        $data = User::find($id);
        return view('admin.Account.edit',compact('data'));

    }
    
    public function postEdit($id,Request $request){
        $user = User::find($id);
        if($request->input('txtPass')){
            $this->validate($request,
            [
                'txtRePass' => 'same:txtRePass'
            ],
            [
                'txtRePass.same' => 'Mật khẩu không khớp'
            ]);
            $pass = $request->input('txtPass');
            $user->password = Hash::make($pass);
        }
        $user ->email = $request ->txtEmail;
        $user ->level = $request ->rdoLevel;
        $user ->remember_token = $request->input('_token');
        $user ->save();
        return redirect()->route('admin.Account.getlist')->with(['flash_level'=>'success','flash_message'=>'Sửa thành công']);

    }
    
}
