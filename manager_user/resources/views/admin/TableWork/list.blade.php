@extends('admin.master')
@section('content')
@section('controller','Danh sách bàn làm việc')
<!-- /.col-lg-12 -->
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
            <th>STT</th>
            <th>Mã bàn</th>
            <th>SDT Bàn</th>
            <th>Mã nhân viên</th>
            <th>Tên Nhân viên</th>
            <th>Chức Danh</th>
            
            
            
        </tr>
    </thead>
    <tbody>
            <?php $stt = 0 ?>
       @foreach($tab as $item_table)
            <?php $stt = $stt + 1 ?>
            <tr class="odd gradeX" align="center">
            <td>{!! $stt !!}</td>
            <td>{!! $item_table->table_code !!}</td>
            <td><?php echo "0"?>{!! $item_table->table_phone !!}</td>
            <td>{!! $item_table->MaNV !!}</td>
            <td>{!! $item_table->TenNV !!}</td>
            <td>{!! $item_table->tenCD !!}</td>
            
            </tr>
        @endforeach
    </tbody>
</table>
@endsection