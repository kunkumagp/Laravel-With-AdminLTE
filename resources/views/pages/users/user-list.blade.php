@extends('adminlte::page')

@section('title', $title)

@section('content_header')
<h1>User List 
<a href="{{route('user-create')}}" class="btn btn-success">Create a new user</a></h1>
<ol class="breadcrumb float-sm-right">
  <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
  <li class="breadcrumb-item active">Users</li>
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
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Phone</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>User Role</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($users as $user)
                  <tr>
                    <td>{{$user->id}}</td>
                    <td>{{ucfirst(trans($user->first_name))}}</td>
                    <td>{{ucfirst(trans($user->last_name))}}</td>
                    <td>{{$user->phone}}</td>
                    <td><?php if($user->gender!=null){echo ucfirst(trans($user->gender));} ?></td>
                    <td>{{$user->email}}</td>
                    <td><?php if(sizeof($user->roles) > 0){echo $user->roles[0]->label;}else {echo '-';} ?></td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
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