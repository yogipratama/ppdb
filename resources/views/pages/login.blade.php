@extends('layouts.app')

@section('content')
  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Login</h2>
        <p>Apabila belum memiliki akun silhakan register terlebih dahulu</p>
      </div>
    </div><!-- End Breadcrumbs -->

    <section id="contact" class="contact ">
      <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="mt-5 card border-success mb-3">
                    <div class="card-header d-flex justify-content-center bg-transparent border-success">Login</div>
                    <div class="card-body mt-4">
    
                        <form action="{{ url('proses_login') }}" method="POST">
                            @csrf
    
                            <div class="form-group row mb-4">
                                @error('login_gagal')
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <span class="alert-inner--text">{{ $message }}</span>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                @enderror
                                <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>
                                <div class="col-md-6">
                                    <input type="text" id="username" class="form-control" name="username" required autofocus>
                                    @if ($errors->has('username'))
                                        <span class="text-danger">{{ $errors->first('username') }}</span>
                                    @endif
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="password" class="form-control" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                            </div>
    

    
                            <div class="mt-4 d-flex justify-content-center">
                                <button type="submit" class="btn btn-outline-success">
                                    Login
                                </button>
                            </div>
                        </form>
                          
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section><!-- End Contact Section -->
  </main>
@endsection