@extends('login.main')
@section('container')
    <main>
        <div class="container">
            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="/" class="logo d-flex align-items-center w-auto">
                                    <img src="img\gundar.png" alt="gunadarma">
                                    <span class="d-none d-lg-block">Website Presensi Jurusan Teknik Informatika Universitas
                                        Gunadarma</span>
                                </a>
                            </div><!-- End Logo -->
                            @if (session()->has('success'))
                                <div class="alert alert-success col-lg-9 text-center" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @error('email')
                                <div class="alert alert-danger col-lg-9 text-center" role="alert">
                                    Email / Password Salah!
                                </div>
                            @enderror
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Masuk Ke Akun Anda</h5>
                                        <p class="text-center small">Masukkan email & password untuk login</p>
                                    </div>
                                    {{-- form --}}
                                    <form method="POST" action="{{ route('login') }}" class="row g-3 needs-validation"
                                        novalidate>
                                        @csrf
                                        <div class="col-12">
                                            <label for="yourEmail" class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control" id="yourEmail"
                                                required>
                                            <div class="invalid-feedback">Masukkan Email Anda!</div>
                                        </div>

                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" id="yourPassword"
                                                required>
                                            <div class="invalid-feedback">Masukkan Password Anda!</div>
                                        </div>
                                        <div class="col-12">
                                            <a class="" href="/forgetpassword">Lupa Password</a>
                                        </div>

                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Masuk</button>
                                        </div>
                                        <div class="col-12">
                                            <p class="small mb-0">Tidak Punya Akun?
                                            <div class="filter">
                                                <a class="icon" href="#" data-bs-toggle="dropdown">Buat Akun</a>
                                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow mt-2">
                                                    <li><a class="dropdown-item" href="/registerlecturer">Dosen</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="/registerstudent">Mahasiswa</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            </p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main><!-- End #main -->
@endsection
