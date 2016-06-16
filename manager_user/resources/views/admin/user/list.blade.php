@extends('admin.master')
@section('content')
@section('controller','Danh sách nhân viên')

<!-- /.col-lg-12 -->
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
            <th align="center">STT</th>
            <th align="center">Mã Nhân viên</th>
            <th align="center">Họ tên</th>
            <th align="center">Giới tính</th>
            <th align="center">Ngày sinh</th>
            <th align="center">Điện thoại</th>
            <th align="center">Email</th>
            <th align="center">Chức danh</th>
            <th align="center">Phòng ban</th>
            
        </tr>
    </thead>
    <tbody>
        <?php $stt = 0 ?>
       @foreach($user as $item_users)
       <?php $stt = $stt + 1 ?>
        <tr class="odd gradeX" align="center">
            <td>{!! $stt !!}</td>
            <td>{!! $item_users->MaNV !!}</td>
            <td>{!! $item_users->TenNV !!}</td>
            <td>
                @if($item_users->GT == 1)
                    nam
                @else
                    nữ
                @endif
            </td>
            <td>{!! $item_users->Ngay_sinh !!}</td>
            <td>{!! $item_users->Dien_thoai !!}</td>
            <td>{!! $item_users->email !!}</td>
            <td>{!! $item_users->tenCD !!}</td>
            <td>{!! $item_users->TenPB !!}</td>
            
            
        </tr>
        @endforeach
    </tbody>
</table>
@endsection