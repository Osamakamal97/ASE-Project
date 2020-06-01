@extends('layouts.layout')
@section('title','Main')
@section('content')
    <!--? Services Ara Start -->
    <div class="services-area section-padding3">
        <div class="container">
            <div class="row">
                <div class="cl-xl-7 col-lg-8 col-md-10">
                    <!-- Section Tittle -->
                    <div class="section-tittle mb-70">
                        <span>Our services</span>
                        <h2>There is some services that we give</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-10">
                    <div class="single-services mb-100">
                        <div class="services-img">
                            <img src="assets/img/Delivery.jpg" alt="" style="height:404px">
                        </div>
                        <div class="services-caption">
                            <span>Delivery Services</span>
                            <p><a href="{{route('delivery.index')}}">We have delivery service in anyway anytime.</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-10">
                    <div class="single-services mb-100">
                        <div class="services-img">
                            <img src="assets/img/gallery/services4.png" alt="">
                        </div>
                        <div class="services-caption">
                            <span>Rent a car</span>
                            <p><a href="{{route('rent-car.index')}}">You can rent car in what we have of cars.</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-10">
                    <div class="single-services mb-100">
                        <div class="services-img">
                            <img src="assets/img/gallery/services2.png" alt="">
                        </div>
                        <div class="services-caption">
                            <span>Book bus ticket</span>
                            <p><a href="#">We have service to book bus ticket.</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-10">
                    <div class="single-services mb-100">
                        <div class="services-img">
                            <img src="assets/img/gallery/services3.png" alt="">
                        </div>
                        <div class="services-caption">
                            <span>Food service</span>
                            <p><a href="#">We have a lot of resturance if u need to buy some food.</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Ara End -->
@endsection
