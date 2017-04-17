@extends('layouts.adminMaster')
@section('title') Room Request @endsection
@section('main-content')
    <section class="content-header">
        <h1>
            Room Requests
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
                                <th>Request by</th>
                                <th>Check In</th>
                                <th>Check Out</th>
                            </tr>
                            @foreach($booking as $book)
                                <tr>
                                    <td>{{$book->book_room}}</td>
                                    <td>{{$book->book_by}}</td>
                                    <td>{{$book->check_in}}</td>
                                    <td>{{$book->check_out}}</td>
                                    {{--@if($book->status==1)--}}
                                        {{--<td><span class="label label-success">Booked</span></td>--}}
                                    {{--@else--}}
                                        {{--<td><span class="label label-danger">UnBooked</span></td>--}}
                                    {{--@endif--}}
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