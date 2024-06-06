

<?php $__env->startSection('container'); ?>
    <main id="main" class="main">

        <div class="pagetitle">
            <h1><?php echo e($page); ?></h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboardadmin"><?php echo e($page); ?></a></li>
                    <li class="breadcrumb-item active">Pengaturan Mahasiswa</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <!-- Sales Card -->
        <div class="card info-card ">
            <div class="card-body">
                <h5 class="card-title">Atur Text Dashboard</h5>
                
                <form method="POST" action="/dashboardadmin/studentsetting">
                    <?php echo csrf_field(); ?>
                    <?php if(session()->has('success')): ?>
                        <div class="alert alert-success col-lg-6" role="alert">
                            <?php echo e(session('success')); ?>

                        </div>
                    <?php endif; ?>
                    <input type="hidden" name="usertype_id" value="3">
                    <input id="body" type="hidden" name="body" value="<?php echo e($dashboardstudent->body); ?>">
                    <trix-editor input="body"></trix-editor>
                    <button type="submit" class="btn btn-primary mt-2">Ubah</button>
                </form>
                <h5 class="card-title">Atur Database</h5>
                <form action="/dashboardadmin/studentimport" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <?php $__errorArgs = ['file'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alert alert-danger">File Excel Tidak Valid</div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <?php if(session('error')): ?>
                            <div class="alert alert-danger">
                                <?php echo e(session('error')); ?>

                            </div>
                        <?php endif; ?>
                        <label class="form-label" for="customFile">Masukan/Perbarui List Mahasiswa</label>
                        <input type="file" class="form-control" id="customFile" name="file"
                            class="<?php $__errorArgs = ['file'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" />
                        <button class="btn btn-primary mt-2" type="submit">Upload</button>
                    </div>
                </form>
            </div>
        </div>


        <section>
    </main><!-- End #main -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Yana\Desktop\0.SKRIPSI\3. PROGRAM\UPDATE TERAKHIR FIX\Website-Absensi\resources\views/dashboard/admin/studentsetting.blade.php ENDPATH**/ ?>