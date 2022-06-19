@extends('layouts.dashboard')
@section('content')
    <main id="main" class="main">

    <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
    <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
        <div class="row">
            <div class="alert alert-info" role="alert">
                <h4 class="alert-heading">Selamat Datang Calon Siswa!</h4>
                <p>{{ Auth::user()->name}}</p>
                <hr>
                    @isset($data)
                      <div class="card col-md-4 ">
                        <div class="card-body profile-card pt-4 ">
                          <div class="row d-flex justify-content-center">
                            <div class=" d-flex justify-content-center label">Status Pendaftaran</div>
                            <div class="  mt-4 col-md-7 alert alert-danger" role="alert">{{ $data->status_pendaftaran ?? 'Belum Terverifikasi'}}</div>
                          </div>
                        </div>
                      </div>
                    @endisset
                    @empty($data)
                        <p>Anda belum mengisi form pendaftaran, silahkan isi di menu pendaftaran</p>
                    @endempty
              </div>
        </div>
        </div><!-- End Left side columns -->

    </div>
    </section>

    </main><!-- End #main -->
@endsection

