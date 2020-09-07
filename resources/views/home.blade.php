@extends('layouts.app')
@section('content')
<div class="d-flex middle">
    <div class="container lg flex-center">
        <div class="row d-lg-flex align-items-lg-center align-items-start d-none d-lg-block d-md-none">
            <div class="col-lg-6 d-none d-lg-block d-md-none">
                <div class="row animated fadeInLeftBig delay-2s">
                    <h2 class="text-center">Hello, I am</h2><p class="h2 text-purple">&nbsp;Ari Pratama Putra</p>
                </div>
                <div class="row animated fadeInLeftBig delay-2s">
                    <h3>Web Developer</h3>
                </div>
                <div class="row animated fadeInLeftBig delay-2s">
                    <h3>
                        <span class="text-danger"><i class="fab fa-laravel"></i>&nbsp;Laravel</span>
                        <span class="text-purple ml-2 mr-2"><i class="fab fa-bootstrap"></i>&nbsp;Bootstrap</span> 
                        <span class="text-warning"><i class="fab fa-js"></i>&nbsp;JS</span>
                    </h3>
                </div>
                <div class="row">
                    <div class="animated fadeInUpBig delay-3s">
                        <a href="/about">
                            <button type="button" class="btn purple-gradient ml-0 animated bounce infinite slow">About Me</button>
                        </a>
                    </div>
                    <div class="animated fadeInDownBig delay-3s">
                        <button type="button" class="btn purple-gradient animated bounce infinite slower">Download CV</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center animated fadeInRightBig delay-1s">
                <img src="{{asset('img/ari.jpg')}}" class="image">
            </div>
        </div>
        <!-- SmartView -->
        <div class="row d-none d-md-block d-lg-none">
            <div class="row  d-flex justify-content-md-center animated fadeInDownBig">
                <h3>Hello, I am <span class="text-purple">Ari Pratama Putra</span></h3>
            </div>
            <div class="row d-flex justify-content-md-center animated fadeIn delay-1s">
                <img src="{{ asset('img/ari.jpg') }}" class="image">
            </div>
            <div class="row d-flex justify-content-center animated fadeInUpBig delay-2s">
                <h3>Web Developer</h3>
            </div>
            <div class="row d-flex justify-content-md-center">
                <h3>
                    <span class="text-danger animated fadeInUpBig delay-3s"><i class="fab fa-laravel"></i>&nbsp;Laravel</span>
                    <span class="text-purple ml-2 mr-2 animated fadeInUpBig delay-4s"><i class="fab fa-bootstrap"></i>&nbsp;Bootstrap</span> 
                    <span class="text-warning animated fadeInUpBig delay-5s "><i class="fab fa-js"></i>&nbsp;JS</span>
                </h3>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="animated fadeInUpBig delay-5s">
                    <a href="/about">
                        <button type="button" class="btn purple-gradient ml-0 animated bounce infinite slow">About Me</button>
                    </a>
                </div>
                <div class="animated fadeInDownBig delay-5s">
                    <button type="button" class="btn purple-gradient animated bounce infinite slower">Download CV</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection