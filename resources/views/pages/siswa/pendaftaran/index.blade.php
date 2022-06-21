@extends('layouts.dashboard')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Pendaftaran</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Pendaftaran</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">

              @isset($data)
              
              <section class="section profile pt-4">
                <div class="alert alert-info" role="alert">
                  <h4 class="alert-heading">Anda telah mengisi formulir pendaftaran</h4>
                  <p>Silahkan input nilai rapot</p>
                  <a href="#" class="btn btn-primary"><b>Input Nilai</b></a>
                </div>
                <div class="row">
                  <div class="col-xl-8">
          
                    <div class="card">
                      
                      <div class="card-body ">
                        <!-- Bordered Tabs -->
                        <div class="tab-content pt-2">
                          
                          <div class="tab-pane fade show active profile-overview" id="profile-overview">
      
                            <div class="row">
                              <div class="col-md-8">
                                <h5 class="card-title">Data Formulir Pendaftaran</h5>
                              </div>
                              <div class="col-md-4 d-flex justify-content-end align-items-center">
                                <a href="{{ route('pendaftaran.edit', $data->id ) }}" class="btn btn-secondary "><b>Edit Formulir</b></a>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-lg-4 col-md-4 label ">Nama Lengkap</div>
                              <div class="col-lg-8 col-md-8">{{ $data->nama_siswa}}</div>
                            </div>
          
                            <div class="row">
                              <div class="col-lg-4 col-md-4 label">NISN</div>
                              <div class="col-lg-8 col-md-8">{{ $data->nisn}}</div>
                            </div>
          
                            <div class="row">
                              <div class="col-lg-4 col-md-4 label">NIK</div>
                              <div class="col-lg-8 col-md-8">{{ $data->nik}}</div>
                            </div>
          
                            <div class="row">
                              <div class="col-lg-4 col-md-4 label">Jenis Kelamin</div>
                              <div class="col-lg-8 col-md-8">{{ $data->jenis_kelamin}}</div>
                            </div>
          
                            <div class="row">
                              <div class="col-lg-4 col-md-4 label">Tempat Lahir</div>
                              <div class="col-lg-8 col-md-8">{{ $data->tempat_lahir}}</div>
                            </div>
          
                            <div class="row">
                              <div class="col-lg-4 col-md-4 label">Tanggal Lahir</div>
                              <div class="col-lg-8 col-md-8">{{ $data->tanggal_lahir}}</div>
                            </div>
          
                            <div class="row">
                              <div class="col-lg-4 col-md-4 label">Agama</div>
                              <div class="col-lg-8 col-md-8">{{ $data->agama}}</div>
                            </div>

                            <div class="row">
                              <div class="col-lg-4 col-md-4 label">Alamat</div>
                              <div class="col-lg-8 col-md-8">{{ $data->alamat}}</div>
                            </div>

                            <div class="row">
                              <div class="col-lg-4 col-md-4 label">No HP</div>
                              <div class="col-lg-8 col-md-8">{{ $data->nohp}}</div>
                            </div>

                            <div class="row">
                              <div class="col-lg-4 col-md-4 label">Asal Sekolah</div>
                              <div class="col-lg-8 col-md-8">{{ $data->asal_sekolah}}</div>
                            </div>

                            

                            <h5 class="card-title">Data Ayah</h5>

                            <div class="row">
                              <div class="col-lg-4 col-md-4 label">Nama Ayah</div>
                              <div class="col-lg-8 col-md-8">{{ $data->nama_ayah}}</div>
                            </div>

                            <div class="row">
                              <div class="col-lg-4 col-md-4 label">Pekerjaan Ayah</div>
                              <div class="col-lg-8 col-md-8">{{ $data->pekerjaan_ayah}}</div>
                            </div>

                            <div class="row">
                              <div class="col-lg-4 col-md-4 label">No Hp Ayah</div>
                              <div class="col-lg-8 col-md-8">{{ $data->nohp_ayah}}</div>
                            </div>

                            <h5 class="card-title">Data Ibu</h5>


                            <div class="row">
                              <div class="col-lg-4 col-md-4 label">Nama Ibu</div>
                              <div class="col-lg-8 col-md-8">{{ $data->nama_ibu}}</div>
                            </div>

                            <div class="row">
                              <div class="col-lg-4 col-md-4 label">Pekerjaan Ibu</div>
                              <div class="col-lg-8 col-md-8">{{ $data->pekerjaan_ibu}}</div>
                            </div>

                            <div class="row">
                              <div class="col-lg-4 col-md-4 label">No Hp Ibu</div>
                              <div class="col-lg-8 col-md-8">{{ $data->nohp_ibu}}</div>
                            </div>

                          </div>
          
                        </div><!-- End Bordered Tabs -->
          
                      </div>
                    </div>
          
                  </div>
                  <div class="col-xl-4">
          
                    <div class="card">
                      <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
          
                        <img src="{{ asset('img/foto_siswa/'.$data->foto) }}" alt="Profile" class="rounded">
                        <h2>{{ $data->nama_siswa}}</h2>
                        <h3>{{ $data->nisn}}</h3>
                      </div>
                    </div>

                    <div class="card">
                      <div class="card-body profile-card pt-4">
                        <div class="row d-flex justify-content-center">
                          <div class=" d-flex justify-content-center label">Status Pendaftaran</div>
                          <div class="  mt-4 col-md-8 alert alert-danger d-flex justify-content-center" role="alert">{{ $data->status_pendaftaran ?? 'Belum Terverifikasi'}}</div>
                        </div>
                      </div>
                    </div>
          
                  </div>
          
                  
                </div>
              </section>
              @endisset

              @empty($data)
                <div class="alert alert-danger mt-4" role="alert">
                  <h4 class="alert-heading">Haloo, {{ Auth::user()->name }}!</h4>
                  <p>Anda belum mengisi form pendaftaran, silahkan isi sekarang!</p>
                  <hr>
                  <a href="{{ route('pendaftaran.create')}}" class="btn btn-primary"><b>Isi Formulir</b></a>
                </div>        
                
                <!-- Table with stripped rows -->
              @endempty
            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
@endsection

