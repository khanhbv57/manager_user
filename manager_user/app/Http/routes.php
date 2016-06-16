<?php

use App\Role;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;
use App\Desk;
use Illuminate\Http\Request;
use App\Employee;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('', function(){
	return view('home');
});
Route::get('/nhan-vien', function () {
	
	$roles = Role::all();
	$userID = Desk::select('User_id');
	$role = Input::get('role');
	$results = Employee::all();
    return view('welcome')->with([
    	'chucdanh' => $roles,
    	'results' => $results
    	
    	]);
    
});
Route::get('/map',function(){
	return view('map');
});

Route::post('/search', function(){
    $roles = role::all();
    $role = Input::get('role');
    $manv = Input::get('manv');
    $tennv = Input::get('tennv');
    if($manv != null && $tennv == null){
        $results = Employee::where('MaNV', 'like', '%'.$manv.'%')->get();
    }
    elseif ($manv == null && $tennv ==null && $role != null) {
    	$results = Employee::where('Role_id', '=', $role)->get();
    }
    elseif ($tennv != null && $manv == null) {
    	$results = Employee::where('TenNV', 'like', '%'.$tennv.'%')->get();
    }
  	elseif ($tennv == null && $manv == null && $role == null) {
  		$results = Employee::all();
  	}
    return view('welcome')->with([
    	'chucdanh' => $roles,
        'results' => $results,
    
    ]);

});

Route::get('auth/login',['as'=>'login_get','uses'=>'Auth\AuthController@getLogin']);
Route::post('auth/login',['as'=>'login_post','uses'=>'Auth\AuthController@login']);
Route::get('auth/logout',['as'=>'logout_get','uses'=>'Auth\AuthController@logout']);

Route::group(['prefix'=>'admin','middleware'=>'auth'], function(){
	
	Route::group(['prefix'=>'Account'], function(){
		Route::get('list',['as' => 'admin.Account.getlist','uses' => 'UserController@getList']);
		Route::get('add',['as' => 'admin.Account.getAdd','uses' => 'UserController@getAdd']);
		Route::post('add',['as' => 'admin.Account.postAdd','uses' => 'UserController@postAdd']);
		Route::get('delete/{id}',['as' => 'admin.Account.getDelete','uses' => 'UserController@getDelete']);
		Route::get('edit/{id}',['as' => 'admin.Account.getEdit','uses' => 'UserController@getEdit']);
		Route::post('edit/{id}',['as' => 'admin.Account.postEdit','uses' => 'UserController@postEdit']);
	});
	Route::group(['prefix'=>'user'], function(){
		Route::get('list',['as' => 'admin.user.getlist','uses' => 'UserDetailController@getList']);
		Route::get('add',['as' => 'admin.user.getAdd','uses' => 'UserDetailController@getAdd']);
		Route::post('add',['as' => 'admin.user.postAdd','uses' => 'UserDetailController@postAdd']);
		Route::get('profile',['as' => 'admin.user.getprofile','uses' => 'UserDetailController@getProfile']);
		Route::post('profile',['as' => 'admin.user.postprofile','uses' => 'UserDetailController@postProfile']);
		Route::get('delete/{id}',['as' => 'admin.user.getDelete','uses' => 'UserDetailController@getDelete']);
		Route::get('edit/{id}',['as' => 'admin.user.getEdit','uses' => 'UserDetailController@getEdit']);
		Route::post('edit/{id}',['as' => 'admin.user.postEdit','uses' => 'UserDetailController@postEdit']);
	});

	Route::group(['prefix'=>'TableWork'], function(){
		Route::get('list',['as' => 'admin.TableWork.getlist','uses' => 'TableController@getList']);
		Route::get('add',['as' => 'admin.TableWork.getAdd','uses' => 'TableController@getAdd']);
		Route::post('add',['as' => 'admin.TableWork.postAdd','uses' => 'TableController@postAdd']);
		Route::get('delete/{id}',['as' => 'admin.TableWork.getDelete','uses' => 'TableController@getDelete']);
		Route::get('edit/{id}',['as' => 'admin.TableWork.getEdit','uses' => 'TableController@getEdit']);
		Route::post('edit/{id}',['as' => 'admin.TableWork.postEdit','uses' => 'TableController@postEdit']);
	});
});

