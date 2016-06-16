@extends('layout.app')
@section('title','Trang chủ')
@section('content')
<div class="container">
    @if(Session::has('flash_message_empty'))
        <div class="alert alert-warning alert-dismissible" role="alert"><strong> {!! session('flash_message_empty') !!}</strong></div>
    @endif
    <div class="row">
        <div class="container">
        <form action="{{url('/search')}}" method="post" accept-charset="utf-8">
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Tra cứu nhân viên</div>

                <div class="panel-body">
                    <div class="col-md-3">
                        Chức danh: 
                        <select name="role" id="role" class="form-control">
                            @foreach($chucdanh as $role)
                            <option value="{{$role->id}}"
                                ><?php echo $role->tenCD ?> </option>
                            @endforeach
                        </select>    
                    </div>
                    <div class="col-md-3">
                        Mã nhân viên: 
                        <input class="form-control" type="text" name="manv" value="" placeholder="">
                    </div>
                    <div class="col-md-3"> 
                        Tên nhân viên:
                        <input class="form-control" type="text" name="tennv" value="" placeholder="">
                        
                    </div>               
                </div>
                <div class="col-md-12" align="middle">
                        <button class="btn btn-primary" type="submit">Tìm kiếm</button>
                    </div>
                <br><br>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Mã bàn</th>
                                    <th>Số điện thoại bàn</th>
                                    <th>Mã Nhân viên</th>
                                    <th>Tên Nhân viên</th>
                                    <th>Chức danh</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $stt = 0 ?>
                                 @foreach($results as $re)
                                 <?php $stt = $stt + 1 ?>
                                    <tr>
                                        <td>{{ $stt }}</td>
                                        <td>{{$re->getDesk()->table_code}}</td>
                                        <td>{{$re->getDesk()->table_phone}}</td>
                                        <td>{{$re->MaNV }}</td>
                                        <td>{{$re->TenNV }}</td>
                                        <td>{{$re->getRole()->tenCD }}</td>
                                        
                                     </tr>
                                    @endforeach
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>    
        </form>
    </div>
</div>
@endsection
