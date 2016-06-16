@extends('admin.master')
@section('controller','Sửa bàn làm việc')
@section('content')
<div class="bd">

<form name="xuly" action="" method="post">
<table border="0" cellpadding="0" cellspacing="0">
<tr class="table">
    <td class="left"><p>Họ Tên:</p></td>
    <td class="right"><p><input type="text" name="taikhoan" maxlength="70" size="50"></p></td>
</tr>
<tr class="table">
    <td class="left"><p>Mã nhân viên:</p></td>
    <td class="right"><p><input type="text" name="MaNV" maxlength="70" size="50"></p></td>
</tr>
<tr class="table">
    <td class="left"><p>Số điện thoại:</p></td>
    <td class="right"><p><input type="text" name="lapmatkhau" maxlength="70" size="50"></p></td>
</tr>
<tr class="table">
    <td class="left"><p>Email</p></td>
    <td class="right"><p><input type="text" name="email" maxlength="70" size="50"></p></td>
</tr>
<tr class="table">
    <td class="left"><p>Ngày sinh:</p></td>
    <td class="right"><p><input type="text" name="hoten" maxlength="70" size="50"></p></td>
</tr>
<tr class="table">
    <td class="left"><p>Giới tính</p></td>
    <td class="right"><p><input type="radio" checked name="gioitinh"> nam <input type="radio" name="gioitinh"> nữ</p></td>
</tr>
<tr class="table">
    <td class="left"><p>Quê quán</p></td>
    <td class="right">
           <p>
        <select name="quequan">
          <option value="CanTho">Cần Thơ</option>
          <option value="DongThap">Đồng Tháp</option>
          <option value="SocTrang">Sóc Trăng</option>
        </select>
        </p>
    </td>
</tr>
<tr class="table">
    <td class="left"><p>Ghi chú cá nhân</p></td>
    <td class="right"><p><textarea style="height:100px;width:auto" name="ghichu"></textarea></p></td>
</tr>
<tr>
<td colspan="2">
  <center><input type="button" value="Lưu" name="luu"> <input type="reset" value="Nhập lại" name="nhaplai" maxlength="80" size="50"></center>
</td>
</tr>
</table>
</form>
</div>
@endsection