@extends('layouts.adminMaster')
@section('title') Add Employees @endsection
@section('main-content')
    <section class="content-header">
        <h1>
            Add Rooms
        </h1>

    </section>

    <!-- Main content -->
    <section class="content">

        <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{route('addRoom')}}" enctype="multipart/form-data">
                <div class="box-body">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Room Number</label>
                        <input type="number" name="roomnumber" class="form-control" placeholder="Enter room number">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Price</label>
                        <input type="number" name="price" class="form-control"  placeholder="Enter price">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Picture</label>
                        <input type="file" name="file">
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