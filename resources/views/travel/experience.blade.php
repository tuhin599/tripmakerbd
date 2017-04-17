@extends('layouts.Master')
@section('title')Experience @endsection

@section('main-content')


    <div id="fh5co-testimonial">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>Happy Clients</h2>
                </div>
            </div>

            <div class="row">
                @foreach($exp as $exp)
                    <div class="col-md-4">
                        <div class="box-testimony animate-box">
                            <blockquote>
                                <span class="quote"><span><i class="icon-quotes-right"></i></span></span>
                                <p>&ldquo;{{$exp->des}}&rdquo;</p>
                            </blockquote>
                            <p class="author">{{$exp->user->name}} </p>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div id="fh5co-contact" class="fh5co-section-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                    <h3>Share Experience With Us</h3>
                </div>
            </div>
            <form action="{{route('share.experience')}}" method="post">
                <div class="row animate-box">

                    <div class="col-md-6 col-md-offset-3">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input name="title" type="text" class="form-control" placeholder="Experience Title">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="des" class="form-control" id="" cols="30" rows="7"
                                              placeholder="Enter Your Experience"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="submit" value="Submit" class="btn btn-primary">
                                    {{csrf_field()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection