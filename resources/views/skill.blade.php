@extends('layouts.app')
@section('content')
<div class="d-none d-lg-block d-md-none">
    <div class="bg-laravel animated fadeInLeftBig">
        <div class="container">    
            <div class="card card-cascade wider pl-4">
                <div class="view view-cascade overlay">
                    <div class="row">
                        <div class="col-lg-6 mx-auto" style="margin-top:40px;">
                            <div class="row pl-3">
                                <h4 class="text-laravel">
                                    <i class="fab fa-laravel"></i>&nbsp;Laravel
                                </h4>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-laravel" role="progressbar" style="width:90%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex justify-content-end">
                            <img src="{{ asset('img/laravel-ar21.svg') }}" class="laravel">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-bootstrap animated fadeInRightBig">
        <div class="container">
            <div class="card card-cascade wider pl-4 mt-4">
                <div class="view view-cascade overlay">
                    <div class="row">
                        <div class="col-sm-6 mx-auto" style="margin-top:40px;">
                            <div class="row pl-3">
                                <h4 class="text-bootstrap">
                                    <i class="fab fa-bootstrap"></i>&nbsp;Bootstrap
                                </h4>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-bootstrap" role="progressbar" style="width:90%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex justify-content-end">
                            <img src=" {{ asset('img/bootstrap.svg') }}" class="bootstrap">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-javascript animated fadeInLeftBig">
        <div class="container">
            <div class="card card-cascade wider pl-4 mt-4">
                <div class="view view-cascade overlay">
                    <div class="row">
                        <div class="col-lg-6 mt-4">
                            <div class="row pl-3 mt-3">
                                <h4>
                                    <i class="fab fa-js text-javascript"></i>&nbsp;Java Script
                                </h4>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-javascript" role="progressbar" style="width:60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="0"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex justify-content-end">
                            <img src="{{ asset('img/javascript.svg') }}" class="bootstrap">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="background-color:black" class="mb-4 animated fadeInRightBig">
        <div class="container">
            <div class="card card-cascade wider pl-4 mt-4">
                <div class="view view-cascade overlay">
                    <div class="row">
                        <div class="col-lg-6 mt-4">
                            <div class="row pl-3 mt-3">
                                <h4>
                                    <i class="fab fa-github"></i>&nbsp;Git/GitHub
                                </h4>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width:80%; background-color:black" aria-valuenow="60" aria-valuemin="0" aria-valuemax="0"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex justify-content-end">
                            <img src="{{ asset('img/github-1.svg') }}" class="bootstrap">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    {{-- RESPONSIVE --}}

    <div class="d-block d-lg-none">
        <div class="container">
            <div class="card bg-laravel animated bounceIn">
                <div class="row">
                    <div class="col-sm-6 bg-white d-flex justify-content-center">
                        <img src="{{ asset('img/laravel-ar21.svg') }}" class="icon">
                    </div>
                    <div class="col-sm-6">
                        <h4 class="mt-3 text-center text-white">
                            Laravel&nbsp;<i class="fab fa-laravel"></i>
                        </h4>
                        <div class="progress mt-3 mb-4 mr-2 ml-2 bg-white" style="height:7px;">
                            <div class="progress-bar laravel-hp animated fadeInLeft delay-1s" role="progressbar" style="width:90%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card bg-bootstrap mt-4 animated bounceIn">
                <div class="row">
                    <div class="col-sm-6 bg-white d-flex justify-content-center">
                        <img src="{{ asset('img/bootstrap.svg') }}" class="bootstrap-icon">
                    </div>
                    <div class="col-sm-6">
                        <h4 class="mt-3 text-center text-white">
                            Bootstrap&nbsp;<i class="fab fa-bootstrap"></i>
                        </h4>
                        <div class="progress mt-2 mb-4 mr-2 ml-2 bg-white" style="height:7px;">
                            <div class="progress-bar bootstrap-hp animated fadeInLeft delay-1s" role="progressbar" style="width:90%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card bg-javascript mt-4 animated bounceIn">
                <div class="row">
                    <div class="col-sm-6 bg-white d-flex justify-content-center">
                        <img src="{{ asset('img/javascript.svg') }}" class="bootstrap-icon">
                    </div>
                    <div class="col-sm-6">
                        <h4 class="mt-3 text-center">
                            JavaScript&nbsp;<i class="fab fa-js"></i>
                        </h4>
                        <div class="progress mt-2 mb-4 mr-2 ml-2 bg-white" style="height:7px;">
                            <div class="progress-bar javascript-hp animated fadeInLeft delay-1s" role="progressbar" style="width:60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card bg-dark mt-4 mb-4 animated bounceIn">
                <div class="row">
                    <div class="col-sm-6 bg-white d-flex justify-content-center">
                        <img src="{{ asset('img/github-1.svg') }}" class="bootstrap-icon">
                    </div>
                    <div class="col-sm-6">
                        <h4 class="mt-3 text-center text-white">
                            Github&nbsp;<i class="fab fa-github"></i>
                        </h4>
                        <div class="progress mt-2 mb-4 mr-2 ml-2" style="height:7px;">
                            <div class="progress-bar github-hp animated fadeInLeft delay-1s" role="progressbar" style="width:80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection