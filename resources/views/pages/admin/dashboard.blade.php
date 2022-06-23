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

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-4">
            <div class="card info-card sales-card">
                <div class="card-body">
                <h5 class="card-title">Total Pendaftar</h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                    <h6>{{ $data1 }}</h6>

                    </div>
                </div>
                </div>

            </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-4">
            <div class="card info-card revenue-card">

                <div class="card-body">
                <h5 class="card-title">Pendaftar Tidak Lolos</h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                    <h6>{{ $data2 }}</h6>
                    </div>
                </div>
                </div>

            </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-4">

            <div class="card info-card customers-card">

                <div class="card-body">
                <h5 class="card-title">Pendaftar Lolos</h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                    <h6>{{ $data3 }}</h6>
                    </div>
                </div>

                </div>
            </div>

            </div><!-- End Customers Card -->


        </div>
        </div><!-- End Left side columns -->

    </div>
    </section>

    </main><!-- End #main -->
@endsection

