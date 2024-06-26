@extends('dashboard.main')

@section('container')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>{{ $page }}</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboardlecturer">{{ $page }}</a></li>
                    <li class="breadcrumb-item active">List UTS</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Cari File UTS</h5>
                    {{-- search --}}
                    <form action="/dashboardlecturer/utslistdetail" class="row g-3">
                        <div class="col-lg-5 col-md-12 mb-3">
                            <div class="form-outline">
                                <select name="schedule_id" class="form-select" aria-label="Default select example" required>
                                    <option value="" style="display: none;">Pilih Kelas</option>
                                    @foreach ($schedules as $schedule)
                                        <option value="{{ $schedule->id }}">{{ $schedule->classroom_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-12 mb-3">
                            <button type="submit" class="btn btn-primary btn-block">Cari</button>
                        </div>
                    </form>

                    <div id="anjir_keren_banget_ham" class="card border border-primary rounded-3 shadow-lg "
                        style=" max-width: 500px;">
                        <div class="card-header bg-light text-center">
                            <div class="d-flex flex-row mb-2  " style="padding-left: 10px;">
                                <div class="p-2 g-col-6 ">
                                    <img src="/img/gundar.png" alt="" width="40">
                                </div>
                                <div class="p-2 g-col-6 ">
                                    <h6 class="mt-2">UNIVERSITAS GUNADARMA</h6>
                                </div>
                            </div>
                            <hr class="mx-3 text-primary" style="margin-top: -10px">
                            <h3><strong>KARTU LIST UTS <p>(Untuk Dosen)</p></strong> </h3>
                        </div>
                        <h6 class="text-center ">Daftar Mahasiswa Peserta UTS</h6>
                        <div id="huhuy" class="card-body border  rounded-3 m-3 text-dark">
                            <p class="pt-3">Kelas :</p>
                            <p>Mata Kuliah:</p>
                            <hr class="text-primary">
                            <h6 class="card-subtitle mb-2 text-muted">Dapat mengikuti:</h6>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">NPM</th>
                                        <th scope="col">Nama</th>
                                    </tr>
                                </thead>
                            </table>
                            <hr class="text-primary">
                            <h6 class="card-subtitle mb-2 text-muted">Tidak dapat mengikuti ujian:</h6>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">NPM</th>
                                        <th scope="col">Nama</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->
@endsection
