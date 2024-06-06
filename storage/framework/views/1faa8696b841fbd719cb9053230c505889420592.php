

<?php $__env->startSection('container'); ?>
    <main id="main" class="main">

        <div class="pagetitle">
            <h1><?php echo e($page); ?></h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboardlecturer"><?php echo e($page); ?></a></li>
                    <li class="breadcrumb-item active">List UAS</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Cari File UAS</h5>
                    
                    <form action="/dashboardlecturer/uaslistdetail" class="row g-3">
                        <div class="col-lg-5 col-md-12 mb-3">
                            <div class="form-outline">
                                <select name="schedule_id" class="form-select" aria-label="Default select example" required>
                                    <option value="" style="display: none;">Pilih Kelas</option>
                                    <?php $__currentLoopData = $schedules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $schedule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($schedule->id); ?>"><?php echo e($schedule->classroom_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                            <h3><strong>KARTU LIST UAS <p>(Untuk Dosen)</p></strong> </h3>
                        </div>
                        <h6 class="text-center ">Daftar Mahasiswa Peserta UAS</h6>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Yana\Desktop\0.SKRIPSI\3. PROGRAM\UPDATE TERAKHIR FIX\Website-Absensi\resources\views/dashboard/lecturer/uaslist.blade.php ENDPATH**/ ?>