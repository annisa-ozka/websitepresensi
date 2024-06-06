
<?php $__env->startSection('container'); ?>
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
                            <?php if(session()->has('success')): ?>
                                <div class="alert alert-success col-lg-9 text-center" role="alert">
                                    <?php echo e(session('success')); ?>

                                </div>
                            <?php endif; ?>
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="alert alert-danger col-lg-9 text-center" role="alert">
                                    Email / Password Salah!
                                </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Masuk Ke Akun Anda</h5>
                                        <p class="text-center small">Masukkan email & password untuk login</p>
                                    </div>
                                    
                                    <form method="POST" action="<?php echo e(route('login')); ?>" class="row g-3 needs-validation"
                                        novalidate>
                                        <?php echo csrf_field(); ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('login.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Yana\Desktop\0.SKRIPSI\3. PROGRAM\UPDATE TERAKHIR FIX\Website-Absensi\resources\views/login/login.blade.php ENDPATH**/ ?>