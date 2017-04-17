@extends('layouts.adminMaster')
@section('title') List Rooms @endsection
@section('main-content')
    <section class="content-header">
        <h1>
            List of the Rooms
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
                                <th>Room Number</th>
                                <th>Price</th>
                                <th>Status</th>
                            </tr>
                            @foreach($rooms as $room)
                                <tr>
                                    <td>{{$room->room_number}}</td>
                                    <td>{{$room->price}}</td>
                                    @if($room->status==1)
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