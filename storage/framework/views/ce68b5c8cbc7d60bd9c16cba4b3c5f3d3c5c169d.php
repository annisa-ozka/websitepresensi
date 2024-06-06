

<?php $__env->startSection('container'); ?>
    <main id="main" class="main">
        
        <div class="pagetitle">
            <h1>Profile</h1>
        </div>
        <div class="p-4">
            <h5>Nama : <?php echo e(auth()->user()->name); ?></h5>
            <h5>Email : <?php echo e(auth()->user()->email); ?></h5>
            <hr>
            <form action="/dashboard/profile" method="POST">
                <?php echo csrf_field(); ?>
                <input type="email" name="email" id="email">
                <button class="btn btn-primary m-2" type="submit">Ubah Email</button>
            </form>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Yana\Desktop\0.SKRIPSI\3. PROGRAM\UPDATE TERAKHIR FIX\Website-Absensi\resources\views/dashboard/profile.blade.php ENDPATH**/ ?>