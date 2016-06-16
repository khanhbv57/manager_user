@extends('admin.master')
@section('controller','Thêm bàn làm việc')
@section('content')
<div class="col-lg-7" style="padding-bottom:120px">
@if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{!! $error !!}</li>
            @endforeach
        </ul>
        
    </div>
@endif
    <form action="" method="POST">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
        <div class="form-group">
            <label>Table_code</label>
            <input class="form-control" name="txtCode" placeholder="Please Enter Table code" value="{!! old('txtCode') !!}" />
        </div>
        <div class="form-group">
            <label>Table_phone</label>
            <input type="number" class="form-control" name="txtPhone" placeholder="Please Enter Phone number" />
        </div>
        <div class="form-group">
            <label>User_id</label>
            <input type="number" class="form-control" name="txtuserid" placeholder="Please Enter User id " />
        </div>
        <div class="form-group">
            <label>Role_id</label>
            <input type="number" class="form-control" name="txtRoleid" placeholder="Please Enter Role id " />
        </div>
        <div class="form-group">
            <label>Room_id</label>
            <input type="number" class="form-control" name="txtRoom" placeholder="Please Enter Room id " />
        </div>
        <button type="submit" class="btn btn-default">Add</button>
        <button type="reset" class="btn btn-default">Reset</button>
    </form>
</div>
@endsection