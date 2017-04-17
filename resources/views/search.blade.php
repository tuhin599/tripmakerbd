@extends('layouts.master')
@section('title') Welcome to TripmakerBD @endsection
@section('main-content')
<div role="tabpanel" class="tab-pane" id="hotels" style="min-height: 500px;padding: 10px;">
    <div class="row" style="margin-top: 100px">
        <form action="/search" method="get">
        <div class="col-xxs-12 col-xs-3 mt">
            <div class="input-field">
                <label for="from">Location:</label>
                <input required name="location" type="text" class="form-control" id="from-place" placeholder="Dhaka"/>
            </div>
        </div>
        <div class="col-xxs-12 col-xs-3 mt alternate">
            <div class="input-field">
                <label for="date-start">Check In:</label>
                <input required name="checkin" type="text" class="form-control" id="date-start" placeholder="mm/dd/yyyy"/>
            </div>
        </div>
        <div class="col-xxs-12 col-xs-3 mt alternate">
            <div class="input-field">
                <label for="date-end">Check Out:</label>
                <input required name="checkout" type="text" class="form-control" id="date-end" placeholder="mm/dd/yyyy"/>
            </div>
        </div>
        <div class="col-xxs-12 col-xs-3 mt">
            <div class="input-field">
                <label for="from">Class:</label>
                <select name="class" class="form-control">
                    <option value="null"> Select the class</option>
                    <option value="1">1 Star</option>
                    <option value="2">2 Star</option>
                    <option value="3">3 Star</option>
                    <option value="4">4 Star</option>
                    <option value="5">5 Star</option>
                </select>
            </div>
        </div>
        <div class="col-xs-3 pull-right" >
            <input type="submit" class="btn btn-primary btn-block" value="Search Hotel">

        </div>
        </form>
    </div>
</div>
@endsection