@extends('layouts.dashboard')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Pendaftaran Siswa</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Pendaftaran Siswa</h5>
              <table class="table mt-3 datatable">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Siswa</th>
                    <th scope="col">NISN</th>
                    <th scope="col">Asal Sekolah</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data as $dt)
                    <tr>
                      <th scope="row">{{ ++$i }}</th>
                      <td>{{ $dt->nama_siswa }}</td>
                      <td>{{ $dt->nisn }}</td>
                      <td>{{ $dt->asal_sekolah }}</td>
                      <td>
                        <a href="#" class="btn btn-primary">
                          <p>Detail</p>
                        </a>
                        <a href="#" class="btn btn-info">
                          <p>Validasi</p>
                        </a>
                        <form action="#" method="POST" class="d-inline">
                          @csrf
                          @method('delete')
                          <button class="btn btn-danger">
                            <p>Hapus</p>
                          </button>
                        </form>  
                      </td>
                    </tr>  
                    @endforeach
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
@endsection

