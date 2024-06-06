

<?php $__env->startSection('container'); ?>
    <main id="main" class="main">

        <div class="pagetitle">
            <h1><?php echo e($page); ?></h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboardadmin"><?php echo e($page); ?></a></li>
                    <li class="breadcrumb-item active">Kehadiran Minimum</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <?php if(session()->has('success')): ?>
            <div class="alert alert-success col-lg-8" role="alert">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>
        <!-- Sales Card -->
        <div class="card info-card ">
            <div class="card-body">
                <form method="POST" action="/dashboardadmin/minimumattendance">
                    <?php echo csrf_field(); ?>
                    <h5 class="card-title">Kehadiran Minimum</h5>
                    <input type="text" name='value' required>%
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
        <section>
    </main><!-- End #main -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Yana\Desktop\0.SKRIPSI\PROGRAM\UPDATE TERAKHIR FIX\Website-Absensi\resources\views/dashboard/admin/minimumattendance.blade.php ENDPATH**/ ?>