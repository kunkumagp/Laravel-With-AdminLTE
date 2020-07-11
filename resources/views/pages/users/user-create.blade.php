@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<h1>User Create</h1>
<ol class="breadcrumb float-sm-right">
  <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
  <li class="breadcrumb-item"><a href="{{route('users')}}">Users</a></li>
  <li class="breadcrumb-item active">User Create</li>
</ol>
@stop

@section('content')

<section class="content box">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card ">
              <!-- /.card-header -->
              <div class="card-body">
              <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                  <!-- form start -->
                  <form action="{{route('user-create-submit')}}" method="post" enctype="multipart/form-data">
                  {!! csrf_field() !!}
                    <div class="card-body">
                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-6">
                            <label for="userRole">User Roles</label>
                            <select class="form-control select2" style="width: 100%;" id="userRole" name="userRole">
                              <option value="">Select...</option>
                              @foreach($userRoles as $userRole)
                              <option value="{{$userRole->id}}">{{$userRole->label}}</option>
                              @endforeach
                            </select>
                          </div>
                          <div class="col-md-6">
                            <label for="gender">Gender</label>
                            <select class="form-control select2" style="width: 100%;" id="gender" name="gender">
                              <option value="">Select...</option>
                              <option value="male">Male</option>
                              <option value="female">Female</option>
                              <option value="other">Other</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                          <label for="firstName">First Name</label>
                          <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name">
                      </div>
                      <div class="form-group">
                          <label for="lastName">Last Name</label>
                          <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name">
                      </div>
                      <div class="form-group">
                          <div><label for="address">Address</label></div>
                          <div class="row">
                            <div class="col-md-6">
                              <input type="text" class="form-control" id="addres1" name="addres1" placeholder="Address 1">
                            </div>
                            <div class="col-md-6">
                              <input type="text" class="form-control" id="addres2" name="addres2" placeholder="Address 2">
                            </div>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="city">City</label>
                          <input type="text" class="form-control" id="city" name="city" placeholder="City">
                      </div>
                      <div class="form-group">
                          <label for="email">Email address</label>
                          <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                      </div>
                      
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                </div>
                <!-- /.card -->

              </div>   
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>@stop