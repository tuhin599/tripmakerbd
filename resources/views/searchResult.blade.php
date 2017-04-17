@extends('layouts.master')
@section('title')Search Result @endsection
@section('main-content')
    <div id="fh5co-tours" class="fh5co-section-gray">
        <div class="container">
            <div class="row row-bottom-padded-md">
                @foreach($hotels as $hotel)
                    @foreach($hotel->rooms as $room)
                        <div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
                            <div href="#"><img style="height: 320px;"
                                        @if($room->picture)
                                        src="{{$room->picture->pic_loc}}"
                                        @else
                                        src="images/place-1.jpg"
                                        @endif
                                        alt="" class="img-responsive">
                                <div class="desc">
                                    <span></span>
                                    <h3>{{$hotel->name}}</h3>
                                    <span class="price">{{$room->price}} Tk</span>
                                    <a class="btn btn-primary btn-outline"
                                       href="{{route('bookRoom',['room'=>$room->id,'checkin'=>$checkin,'checkout'=>$checkout])}}">Book
                                        Now <i
                                                class="icon-arrow-right22"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
@endsection