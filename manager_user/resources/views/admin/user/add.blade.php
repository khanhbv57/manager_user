@extends('admin.master')
@section('controller','Thêm nhân viên')
@section('content')
@if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{!! $error !!}</li>
            @endforeach
        </ul>
        
    </div>
@endif
<div class="panel widget light-widget">
                  <div class="panel-heading no-title"> </div>
                  <form class="form-horizontal" action="#" role="form">
                    <div  class="panel-body">
                      <br/>
                      <div class="row">
                        <div class="col-sm-3 mgbt-xs-20">
                          <div class="form-group">
                            <div class="col-xs-12">
                              <div class="form-img text-center mgbt-xs-15"> <img alt="example image" src="https://www.kiu.edu.pk/img/profile-default.gif" height="200px" > </div>
                              <div class="form-img-action text-center mgbt-xs-20"> <a class="btn vd_btn  vd_bg-blue" href="javascript:void(0);"><i class="fa fa-cloud-upload append-icon"></i> Upload</a> </div>
                              <br/>
                              <div>
                                <table class="table table-striped table-hover">
                                  <tbody>
                                    <tr>
                                      <td style="width:60%;">Status</td>
                                      <td><span class="label label-success">Active</span></td>
                                    </tr>
                                    <tr>
                                      <td>User Rating</td>
                                      <td><i class="fa fa-star vd_yellow fa-fw"></i><i class="fa fa-star vd_yellow fa-fw"></i><i class="fa fa-star vd_yellow fa-fw"></i><i class="fa fa-star vd_yellow fa-fw"></i><i class="fa fa-star vd_yellow fa-fw"></i></td>
                                    </tr>
                                    <tr>
                                      <td>Member Since</td>
                                      <td> Jan 07, 2014 </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-9">
                        
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Họ tên:</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <input type="text" name="txthoten" placeholder="Nhập họ tên">
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Mã nhân viên:</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <input type="text" name="txtMaNV" placeholder="Nhập mã nhân viên">
                                </div>
                              </div>
                            </div> 
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Giới tính:</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <span class="vd_radio radio-info">
                                    <input type="radio" checked="" value="1" name="txtgioitinh">
                                    <label> Nam </label>
                                  </span>
                                  <span class="vd_radio  radio-danger" > 
                                    <input type="radio" value="2" name="txtgioitinh">
                                    <label> Nữ </label>
                                  </span>          
                                </div> 
                              </div> 
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Ngày sinh</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <input type="date" name="txtngaysinh" id="datepicker-normal" class="width-40" />
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                          <label class="col-sm-3 control-label">User_id:</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <input type="text" name="txtUserId" placeholder="Nhập User_id">
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Chức vụ:</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <select class="width-40">
                                    <option value="1">Quản lí</option>
                                    <option value="2">Trưởng phòng</option>
                                    <option value="3">Nhân viên</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Phòng ban:</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <select class="width-40">
                                    <option value="1">Phòng kế toán</option>
                                    <option value="2">Phòng hành chính</option>
                                    <option value="3">Phòng marketing</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Email:</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <input type="email" name="txtemail" placeholder="Nhập email">
                                </div>
                              </div>
                            </div> 
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Số điện thoại:</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <input type="text" name="txtphone" placeholder="Nhập số điện thoại">
                                </div>
                              </div>
                            </div> 
                          </div>
                          <hr/>
                        </div>
                      </div>
                    </div>
                    <div class="pd-20">
                      <button class="btn vd_btn vd_bg-green col-md-offset-3" type="submit"> Finish</button>
                      
                    </div>

                  </form>
                </div>
@endsection