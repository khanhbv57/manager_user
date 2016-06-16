@extends('admin.master')
@section('content')
@section('controller','Danh sách tài khoản')
<!-- /.col-lg-12 -->
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
            
            <th>ID</th>
            <th>Họ Tên</th>
            <th>Email</th>
            <th>Level</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody>
        
       @foreach($user as $item_user)
       
        <tr class="odd gradeX" align="center">
            
            <td>{!! $item_user->id !!}</td>
            <td>{!! $item_user->username !!}</td>
            <td>{!! $item_user->email !!}</td>
            <td>
                @if($item_user->id == 1)
                    SuperAdmin
                @elseif($item_user->level == 1)
                    Admin
                @else
                    Member
                @endif
            </td>       
                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href=" {!! URL::route('admin.Account.getDelete',$item_user->id) !!}" onclick = "return xacnhanxoa('Bạn có muốn xóa không')">Delete</a></td>
                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href=" {!! URL::route('admin.Account.getEdit',$item_user->id) !!}">Edit</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection