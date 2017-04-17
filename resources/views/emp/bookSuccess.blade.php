@extends('layouts.master')
@section('title')Success @endsection
@section('main-content')
    <div class="row" style="min-height: 500px">
        <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box fadeInUp animated" style="margin-top: 150px">
            <h3>Successful!</h3>
            @if(\Illuminate\Support\Facades\Session::has('msgS'))
            <p>{{\Illuminate\Support\Facades\Session::get('msgS')}}</p>
            @endif

        </div>
    </div>
@endsection