@extends('layouts.app')
@section('content')
<div class="d-none d-lg-block">
        <div class="container lg flex-center">
            <div class="row d-lg-flex align-items-lg-center align-items-start">
                <div class="col-lg-6">
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
    </div>
</div>
{{-- Viewport --}}
<div class="d-block d-md-none d-flex align-items-center" style="height:800px;">
    <div class="container">
        <div class="row">
            <h2 class="mx-auto animated fadeInRightBig">Hello, I am</h2>
        </div>
        <div class="row">
            <h2 class="mx-auto text-purple animated fadeInLeftBig">Ari Pratama Putra</h2>
        </div>
        <div class="row mt-4 animated fadeInRightBig">
            <img src={{ asset('img/ari.jpg') }} class="icon mx-auto">
        </div>
        <div class="row mt-2">
            <h3 class="mx-auto animated fadeInLeftBig">Web Developer</h3>
        </div>
        <div class="row d-flex justify-content-center animated bounceIn delay-1s">
            <button type="button" class="btn btn-danger text-white fontL animated bounce slower infinite delay-2s">
                <i class="fab fa-laravel"></i>
            </button>
            <button type="button" class="btn bg-bootstrap text-white fontS animated bounce infinite delay-3s">
                <i class="fab fa-bootstrap"></i>
            </button>
            <button type="button" class="btn bg-javascript fontS animated bounce infinite delay-4s slow">
                <i class="fab fa-js"></i>
            </button>
        </div>
        <div class="row mt-4 d-flex justify-content-center p-2">
            <a href="/about" class="btn-block">
                <button type="button" class="btn btn-secondary btn-block btn-lg animated fadeInLeftBig delay-2s">
                    About Me
                </button>
            </a>
        </div>
        <div class="row d-flex justify-content-center p-2">
            <button type="button" class="btn btn-secondary btn-block btn-lg animated fadeInRightBig delay-2s">
                Download CV
            </button>
        </div>
    </div>
</div>
@endsection