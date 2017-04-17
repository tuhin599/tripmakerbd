@extends('layouts.adminMaster')
@section('title') Add Employees @endsection
@section('main-content')
    <section class="content-header">
        <h1>
            Add Employees
        </h1>

    </section>

    <!-- Main content -->
    <section class="content">

        <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{route('addEmp')}}">
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control"  placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="status"> Active
                        </label>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    {{csrf_field()}}
                </div>
            </form>
        </div>

    </section>
    <!-- /.content -->
@endsection