@extends('adminlte::page')

@section('title', $title)

@section('content_header')
<h1>Report List 
<a href="" class="btn btn-success">Create a new Report</a></h1>
<ol class="breadcrumb float-sm-right">
  <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
  <li class="breadcrumb-item active">Reports</li>
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
                    <th>Report ID</th>
                    <th>Code</th>
                    <th>Patient's Name</th>
                    <th>Started Date</th>
                    <th>Status</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                      <td>0001</td>
                      <td>MED-012AS1C31</td>
                      <td>Sunil Wijewardhana</td>
                      <td>2020/03/13</td>
                      <td><span class="text-success"><b>Complete</b></span></td>
                    </tr>
                    <tr>
                      <td>0002</td>
                      <td>MED-05SDGF31</td>
                      <td>Padma Wanniarachchi</td>
                      <td>2020/03/13</td>
                      <td><span class="text-success"><b>Complete</b></span></td>
                    </tr>
                    <tr>
                      <td>0003</td>
                      <td>MED-65SFG4S564D</td>
                      <td>Shehan Guruge</td>
                      <td>2020/03/16</td>
                      <td>Pending</td>
                    </tr>
                    <tr>
                      <td>0004</td>
                      <td>MED-A1S4DFH4</td>
                      <td>Nimal Amarathunga</td>
                      <td>2020/04/02</td>
                      <td>Pending</td>
                    </tr>
                    <tr>
                      <td>0005</td>
                      <td>MED-98D4FG5DS6</td>
                      <td>Prageeth Senanayaka</td>
                      <td>2020/04/17</td>
                      <td>Pending</td>
                    </tr>
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