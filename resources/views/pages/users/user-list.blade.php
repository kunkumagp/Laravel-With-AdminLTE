@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<h1>User List 
<a href="" class="btn btn-success">Create a new user</a></h1>
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
                    <th>phone</th>
                    <th>gender</th>
                    <th>email</th>
                    <th>User Role</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($users as $user)
                  <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->first_name}}</td>
                    <td>{{$user->last_name}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->gender}}</td>
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