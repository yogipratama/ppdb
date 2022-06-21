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
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-white bg-success text-center">
                        <h5>Pengisian Nilai Rapot</h5>
                    </div>
                    <div class="card-body">
                        <form action="#" class="contact-form" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-section">
                              <div class="form-group row mx-sm-1 mt-4 text-center">
                                <label for="bahasa_indonesia" class="col-sm-2 col-form-label"></label>
                                <label for="bahasa_indonesia" class="col-sm-2 col-form-label">Semester 1</label>
                                <label for="bahasa_indonesia" class="col-sm-2 col-form-label">Semester 2</label>
                                <label for="bahasa_indonesia" class="col-sm-2 col-form-label">Semester 3</label>
                                <label for="bahasa_indonesia" class="col-sm-2 col-form-label">Semester 4</label>
                                <label for="bahasa_indonesia" class="col-sm-2 col-form-label">Semester 5</label>
                              </div>
                              <div class="form-group row mx-sm-1 mt-1">
                                <label for="bahasa_indonesia" class="col-sm-2 col-form-label">Bahasa Indonesia</label>
                                <div class="col-sm-2">
                                  <input type="number" class="form-control" id="bahasa_indonesia" >
                                </div>
                                <div class="col-sm-2">
                                  <input type="number" class="form-control" id="bahasa_indonesia" >
                                </div>
                                <div class="col-sm-2">
                                  <input type="number" class="form-control" id="bahasa_indonesia" >
                                </div>
                                <div class="col-sm-2">
                                  <input type="number" class="form-control" id="bahasa_indonesia" >
                                </div>
                                <div class="col-sm-2">
                                  <input type="number" class="form-control" id="bahasa_indonesia" >
                                </div>
                              </div>
                              <div class="form-group row mx-sm-1 mt-4 ">
                                <label for="IPA" class="col-sm-2 col-form-label">IPA</label>
                                <div class="col-sm-2">
                                  <input type="number" class="form-control" id="IPA" >
                                </div>
                                <div class="col-sm-2">
                                  <input type="number" class="form-control" id="IPA" >
                                </div>
                                <div class="col-sm-2">
                                  <input type="number" class="form-control" id="IPA" >
                                </div>
                                <div class="col-sm-2">
                                  <input type="number" class="form-control" id="IPA" >
                                </div>
                                <div class="col-sm-2">
                                  <input type="number" class="form-control" id="IPA" >
                                </div>
                              </div>
                              <div class="form-group row mx-sm-1 mt-4 ">
                                <label for="bahasa_inggris" class="col-sm-2 col-form-label">Bahasa Inggris</label>
                                <div class="col-sm-2">
                                  <input type="number" class="form-control" id="bahasa_inggris" >
                                </div>
                                <div class="col-sm-2">
                                  <input type="number" class="form-control" id="bahasa_inggris" >
                                </div>
                                <div class="col-sm-2">
                                  <input type="number" class="form-control" id="bahasa_inggris" >
                                </div>
                                <div class="col-sm-2">
                                  <input type="number" class="form-control" id="bahasa_inggris" >
                                </div>
                                <div class="col-sm-2">
                                  <input type="number" class="form-control" id="bahasa_inggris" >
                                </div>
                              </div>
                              <div class="form-group row mx-sm-1 mt-4 ">
                                <label for="mtk" class="col-sm-2 col-form-label">Matematika</label>
                                <div class="col-sm-2">
                                  <input type="number" class="form-control" id="mtk" >
                                </div>
                                <div class="col-sm-2">
                                  <input type="number" class="form-control" id="mtk" >
                                </div>
                                <div class="col-sm-2">
                                  <input type="number" class="form-control" id="mtk" >
                                </div>
                                <div class="col-sm-2">
                                  <input type="number" class="form-control" id="mtk" >
                                </div>
                                <div class="col-sm-2">
                                  <input type="number" class="form-control" id="mtk" >
                                </div>
                              </div>
                              

                              

                              <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                              <button type="submit" class="btn btn-success mt-3">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    </main><!-- End #main -->
    
@endsection

