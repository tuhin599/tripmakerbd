@extends('layouts.master')
@section('title') Welcome to TripmakerBD @endsection
@section('main-content')

    <div class="login-box">
        <div class="row">
            @if(Session::has('msgS'))
                <div class="alert alert-success">
                    {{Session::get('msgS')}}
                </div>
            @endif
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            @if(\Illuminate\Support\Facades\Session::has('msgS') || \Illuminate\Support\Facades\Session::has('msgE'))
                @if(\Illuminate\Support\Facades\Session::get('msgS'))
                    <div class="alert alert-success">
                        <strong>{{\Illuminate\Support\Facades\Session::get('msgS')}}</strong>
                    </div>
                @else
                    <div class="alert alert-danger">
                        <strong>Error! </strong> {{\Illuminate\Support\Facades\Session::get('msgE')}}
                    </div>
                @endif
            @endif
            <p class="login-box-msg">Sign in to start your session</p>

            <form action="{{route('login')}}" method="post">
                <div class="form-group has-feedback">
                    <input name="email" type="email" class="form-control" placeholder="Email">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input name="password" type="password" class="form-control" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                        {{csrf_field()}}
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <a href="{{route('reg')}}" class="text-center">Register a new membership</a>

        </div>
        <!-- /.login-box-body -->
    </div>
@endsection