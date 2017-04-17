@extends('layouts.adminMaster')
@section('title') Add Employees @endsection
@section('main-content')
    <section class="content-header">
        <h1>
            List of the Employees
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">

                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Status</th>
                            </tr>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    @if($user->status==1)
                                        <td><span class="label label-success">Active</span></td>
                                    @else
                                        <td><span class="label label-danger">Inactive</span></td>
                                    @endif
                                </tr>
                            @endforeach
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>


    </section>
    <!-- /.content -->
@endsection