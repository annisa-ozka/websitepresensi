

<?php $__env->startSection('container'); ?>
    <main id="main" class="main">
        
        <div class="pagetitle">
            <h1><?php echo e($page); ?></h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboardadmin"><?php echo e($page); ?></a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div>

        <?php if(session()->has('success')): ?>
            <div class="alert alert-success col-lg-8" role="alert">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <!-- Sales Card -->
        <div class="card info-card ">
            <div class="card-body">
                <h5 class="card-title">SELAMAT DATANG DI WEB PRESENSI<br> JURUSAN TEKNIK INFORMATIKA UNIVERSITAS GUNADARMA</h5>
                <ul class="list-unstyled">
                    <li>1. Silahkan klik tombol Pengaturan Dosen untuk melakukan aktifitas berikut : <br>- Membuat pengumuman pada Dashboard Dosen dengan menuliskan kalimat di bagian "Atur Text Dashboard". <br>- Masukan data List Dosen Gunadarma, upload file excel dengan format kolom "NIDN, Nama Dosen". Penulisan dimulai dari kolom kedua tanpa menggunakan judul kolom. <br>- Masukan data Jadwal Dosen Gunadarma "setelah upload list mahasiswa", upload file excel dengan format kolom "Nomor, Kelas, Mata Kuliah, Lokasi Ruang Perkuliahan, Jam Perkuliahan, NIDN Dosen Pengajar, Tahun Ajaran dan Jumlah Mahasiswa dalam satu kelas." Penulisan dimulai dari kolom pertama tanpa menggunakan judul kolom. <br>- Mohon perhatikan format tabel pada file excel yang akan diupload. Apabila tidak sesuai ketentuan, file tidak dapat masuk ke dalam sistem dan seluruh aktifitas presensi tidak dapat dilakukan. </li><br>
                    <li>2. Silahkan klik tombol Pengaturan Mahasiswa untuk melakukan aktifitas berikut : <br>- Membuat pengumuman pada Dashboard Mahasiswa dengan menuliskan kalimat di bagian "Atur Text Dashboard". <br>- Masukan data List Mahasiswa Gunadarma, upload file excel dengan format kolom "Nama Kelas, NPM, Nama Mahasiswa". Penulisan dimulai dari kolom kedua tanpa menggunakan judul kolom. <br>- Selain format excel, Mohon perhatikan juga Urutan dalam mengupload keseluruhan file : <br> Upload file List Dosen->Upload file List Mahasiswa->Upload file Jadwal Dosen. Apabila tidak sesuai urutan, sistem presensi tidak dapat berjalan dengan semestinya. </li><br>
                    <li>3. Silahkan klik tombol Kehadiran Minimum, untuk memasukan angka minimal presensi sebagai syarat mengikuti ujian untuk masing-masing mahasiswa. </li><br>
                    <li>4. Silahkan klik tombol Profile pada nama user admin, untuk mengubah email. </li>
                </ul>
            </div>
        </div>
        <section>
    </main><!-- End #main -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Yana\Desktop\0.SKRIPSI\PROGRAM\UPDATE TERAKHIR FIX\Website-Absensi\resources\views/dashboard/admin/dashboard.blade.php ENDPATH**/ ?>