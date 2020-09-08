@extends('layouts.app')
@section('content')
<div class="d-none d-lg-block">
    <div class="container d-flex align-items-center">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6">
                <div class="row d-flex justify-content-lg-start justify-content-center">
                    <h3 class="animated fadeInLeftBig delay-2s">About <span class="text-purple">Me</h3>
                </div>
                <div class="row">
                    <h5 class="animated fadeInLeftBig delay-3s">Hallo, perkenalkan saya Ari Pratama Putra. Saya lahir Di Bandung pada tanggal 04 September 1998. Saya anak pertama dari 2 bersaudara,
                        Pendidikan terakhir saya SLTA di SMK Negeri 5 Kota Bandung jurusan Teknik Komputer Jaringan. saya sudah terjun ke dunia Web Developer
                        sejak 2016, menggunakan PHP Native, HTML, dan CSS Native. saat ini saya sedang menempuh pendidikan S1 di Institute Teknologi Budi Utomo,
                        Jakarta Program Studi Teknik Informatika kelas Karyawan.
                    </h5>
                </div>
                <div class="row animated fadeInDownBig delay-4s mt-lg-0 mt-4 d-flex justify-content-lg-start justify-content-center">
                    <a href="/education">
                        <button type="button" class="btn purple-gradient animated bounce infinite slower delay-5s ml-0">
                            Education&nbsp;
                            <i class="fas fa-graduation-cap"></i>
                        </button>
                    </a>
                    <a href="/skills">
                        <button type="button" class="btn purple-gradient animated bounce infinite slow delay-5s">
                            Skills&nbsp;
                            <i class="fas fa-leaf"></i>
                        </button>
                    </a>
                    <a href="/experience">
                        <button type="button" class="btn purple-gradient animated bounce infinite delay-5s">
                            Experience&nbsp;
                            <i class="fas fa-briefcase"></i>
                        </button>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 d-flex justify-content-lg-start justify-content-center">
                <img src="{{ asset('img/about.svg') }}" class="image animated fadeInRightBig delay-1s">
            </div>
        </div>
    </div>
</div>
{{-- responsive --}}

<div class="d-block d-md-none">
    <div class="container">
        <div class="row">
            <h3 class="mx-auto">About<span class="text-purple">&nbsp;Me</span></h3>
        </div>
        <div class="row mt-4">
            <img src="{{ asset('img/about.svg') }}" class="icon mx-auto">
        </div>
        <div class="row mt-2 d-flex justify-content-center pr-2 pl-2">
            <button type="button" class="btn btn-secondary btn-block" data-toggle="modal" data-target="#about">About Me</button>
            <a href="/education" class="btn btn-secondary btn-block">
                Education
            </a>
            <a href="/skills" class="btn btn-secondary btn-block">
                Skills
            </a>
            <a href="/experience" class="btn btn-secondary btn-block">
                Experience
            </a>
        </div>
    </div>
</div>




{{-- modal --}}
<div class="modal fade" id="about" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-secondary text-white">
        <h5 class="modal-title" id="exampleModalLabel">About Me</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5 class="text-center">Hallo, perkenalkan saya Ari Pratama Putra. Saya lahir Di Bandung pada tanggal 04 September 1998. Saya anak pertama dari 2 bersaudara,
            Pendidikan terakhir saya SLTA di SMK Negeri 5 Kota Bandung jurusan Teknik Komputer Jaringan. saya sudah terjun ke dunia Web Developer
            sejak 2016, menggunakan PHP Native, HTML, dan CSS Native. saat ini saya sedang menempuh pendidikan S1 di Institute Teknologi Budi Utomo,
            Jakarta Program Studi Teknik Informatika kelas Karyawan.
        </h5>
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection