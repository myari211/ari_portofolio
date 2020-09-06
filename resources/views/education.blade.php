@extends('layouts.app')
@section('content')
    <div class="container mt-4 d-none d-lg-block d-md-none">
        <div class="row d-flex justify-content-center atas wow fadeIn">
            <h3>Educa<span class="text-purple">tion</span></h3>
        </div>
        <div class="row d-flex align-items-center atas">
            <div class="col-lg-7 wow fadeInLeftBig">
                <div class="row">
                    <h4>SDN Kebon Gedang 10 Bandung</h4>
                </div>
                <div class="row">
                    <h6 class="text-purple">2004 - 2010</h6>
                </div>
                <div class="row">
                    <h5>Achievements :</h5>
                </div>
                <div class="row">
                    <h6>Juara Lomba PTUB se Gugus - 34 tahun 2008</h6>
                </div>
                <div class="row">
                    <button type="button" class="btn purple-gradient ml-0" onClick="window.open('http://20244891.siap-sekolah.com/sekolah-profil/#.X1O70nkzaUk')">More .. </button>
                </div>
            </div>
            <div class="col-lg-5 wow fadeInRightBig">
                <div class="row d-flex justify-content-end">
                    <img src="{{ asset('img/pemkot.svg') }}" class="icon">
                </div>
            </div>
        </div>
        <div class="row top">
            <div class="col-lg-7 wow fadeInRightBig">
                <img src="{{ asset('img/bpp.jpg') }}" class="icon">
            </div>
            <div class="col-lg-5 wow fadeInLeftBig">
                <div class="row">
                    <h4>SMP Balai Perguruan Putri</h4>
                </div>
                <div class="row">
                    <h6 class="text-purple">2010 - 2013</h6>
                </div>
                <div class="row">
                    <h5>Achievements : </h5>
                </div>
                <div class="row">
                    <h6>Juara 2 Basket Putra Turnament BPP CUP tahun 2011</h6>
                    <h6>Juara 3 Basket Putra Turnament BPP CUP tahun 2012</h6>
                </div>
                <div class="row">
                    <button type="button" class="btn purple-gradient ml-0" onClick="window.open('https://www.smkbppbandung.sch.id/')">More .. </button>
                </div>
            </div>
        </div>
        <div class="row top">
            <div class="col-lg-7 wow fadeInRightBig">
                <div class="row">
                    <h4>SMK Negeri 5 Kota Bandung</h4>
                </div>
                <div class="row">
                    <h6 class="text-purple">2013 - 2016</h6>
                </div>
                <div class="row">
                    <h5>Achievements : </h5>
                </div>
                <div class="row">
                    <h6>Juara 3 Lomba Sikap Diam Kota Bandung 2013</h6>
                    <h6>Juara 3 Lomba Cross Country Kota Bandung 2013</h6>
                    <h6>Juara 1 Lomba Sikap Diam Kota Bandung 2014</h6>
                    <h6>Juara 1 Lomba Cross Country Kota Bandung 2014</h6>
                    <h6>Juara 1 Lomba Cross Country Kota Bandung 2015</h6>
                    <h6>Juara 3 Basket Putra Turnament Al - Ma'soem Kota Bandung Tahun 2015</h6>
                    <h6>Pengurus Forum Osis Jawa Barat Tahun 2015 - 2016</h6>
                </div>
                <div class="row">
                    <button type="button" class="btn purple-gradient ml-0" onClick="window.open('https://www.smkn5bandung.sch.id/')">More ..</button>
                </div>
            </div>
            <div class="col-lg-5 wow fadeInLeftBig">
                <div class="row d-flex justify-content-end">
                    <img src="{{ asset('img/smk.jpg') }}" class="icon">
                </div>
            </div>
        </div>
        <div class="row top">
            <div class="col-lg-7 wow fadeInLeftBig">
                <img src="{{ asset('img/itbu.jpg') }}" class="icon">
            </div>
            <div class="col-lg-5 wow fadeInRightBig">
                <div class="row">
                    <h4>Institute Teknologi Budi Utomo Jakarta</h4>
                </div>
                <div class="row">
                    <h6 class="text-purple">2019 - present</h6>
                </div>
                <div class="row">
                    <h5>Program Studi : </h5>
                </div>
                <div class="row">
                    <h6>Teknik Informatika</h6>
                </div>
                <div class="row">
                    <button type="button" class="btn purple-gradient ml-0" onClick="window.open('https://www.itbu.ac.id/')">More ..</button>
                </div>
            </div>
        </div>
    </div>

    {{-- responsive --}}
    <div class="container d-none d-md-block d-lg-none">
        <div class="row justify-content-center wow zoomIn">
            <h3>Educa<span class="text-purple">tion</span></h3>
        </div>
        <div class="row mt-4 d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card wow fadeInDownBig">
                    <img class="card-img-top icon m-2 d-flex mx-auto" src="{{ asset('img/pemkot.svg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title text-center">SDN Kebon Gedang 10</h4>
                        <p class="card-text text-center">2006 - 2010</p>
                        <div class="d-flex justify-content-center">
                            <button type="button" class="btn purple-gradient" data-toggle="modal" data-target="#achieve1">Achievements</button>
                            <a href="http://20244891.siap-sekolah.com/sekolah-profil/#.X1O70nkzaUk">
                                <button type="button" class="btn purple-gradient">More ..</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4 d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card wow fadeInUpBig">
                    <img class="card-img-top icon m-2 d-flex mx-auto" src="{{ asset('img/bpp.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title text-center">SMP Balai Perguruan Putri</h4>
                        <p class="card-text text-center">2010 - 2013</p>
                        <div class="d-flex justify-content-center">
                            <button type="button" class="btn purple-gradient" data-toggle="modal" data-target="#achieve2">Achievements</button>
                            <a href="https://www.smkbppbandung.sch.id/">
                                <button type="button" class="btn purple-gradient">More ..</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4 d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card wow fadeInLeftBig">
                    <img class="card-img-top icon m-2 d-flex mx-auto" src="{{ asset('img/smk.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title text-center">SMK Negeri 5 Bandung</h4>
                        <p class="card-text text-center">2013 - 2016</p>
                        <div class="d-flex justify-content-center">
                            <button type="button" class="btn purple-gradient" data-toggle="modal" data-target="#achieve3">Achievements</button>
                            <a href="https://www.smkn5bandung.sch.id/">
                                <button type="button" class="btn purple-gradient">More ..</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4 d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card wow fadeInRightBig">
                    <img class="card-img-top icon m-2 d-flex mx-auto" src="{{ asset('img/itbu.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title text-center">Institute Teknologi Budi Utomo</h4>
                        <p class="card-text text-center">2019 - present</p>
                        <div class="d-flex justify-content-center">
                            <a href="https://www.itbu.ac.id/">
                                <button type="button" class="btn purple-gradient">More ..</button>
                            </a>        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    



    {{-- modal --}}
<div class="modal fade" id="achieve1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Achievements</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row d-flex justify-content-center">
            <h6>Juara Lomba PTUB se Gugus - 34 tahun 2008</h6>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary mx-auto" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="achieve2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Achievements</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row d-flex justify-content-center">
            <h6>Juara 2 Basket Putra Turnament BPP CUP tahun 2011</h6>
            <h6>Juara 3 Basket Putra Turnament BPP CUP tahun 2012</h6>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary mx-auto" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="achieve3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Achievements</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row d-flex justify-content-start p-2">
                <h6>Juara 3 Lomba Sikap Diam Kota Bandung 2013</h6>
                <h6>Juara 3 Lomba Cross Country Kota Bandung 2013</h6>
                <h6>Juara 1 Lomba Sikap Diam Kota Bandung 2014</h6>
                <h6>Juara 1 Lomba Cross Country Kota Bandung 2014</h6>
                <h6>Juara 1 Lomba Cross Country Kota Bandung 2015</h6>
                <h6>Juara 3 Basket Putra Turnament Al - Ma'soem Kota Bandung Tahun 2015</h6>
                <h6>Pengurus Forum Osis Jawa Barat Tahun 2015 - 2016</h6>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary mx-auto" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
@endsection