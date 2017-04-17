@extends('layouts.master')
@section('title') Welcome to TripmakerBD @endsection
@section('main-content')
    <div class="register-box">

        <div class="register-box-body">
            <p class="login-box-msg">Register a new membership</p>

            <form action="{{route('reg')}}" method="post">
                <div class="form-group has-feedback">
                    <input name="name" type="text" class="form-control" placeholder="Full name">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input name="email" type="email" class="form-control" placeholder="Email">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="re_pass" class="form-control" placeholder="Retype password">
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <select name="type" id="userType" class="form-control">
                        <option value="">Select Type</option>
                        <option value="Manager">Hotel Manager</option>
                        <option value="Tourist">Tourist</option>
                    </select>
                </div>
                <div id="addElement"></div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-xs-6 pull-right">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                        {{csrf_field()}}
                    </div>
                    <!-- /.col -->
                </div>
            </form>


            <a href="{{route('login')}}" class="text-center">I already have a membership</a>
        </div>
        <!-- /.form-box -->
    </div>
    <!-- /.register-box -->

@endsection