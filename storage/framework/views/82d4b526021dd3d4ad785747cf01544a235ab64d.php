

<?php $__env->startSection('container'); ?>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1><?php echo e($page); ?></h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboardlecturer"><?php echo e($page); ?></a></li>
                    <li class="breadcrumb-item"><a href="/dashboardlecturer/attendance">Presensi</a></li>
                    <li class="breadcrumb-item active"><?php echo e($schedule->classroom_name); ?></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <div id="printabsents" class="pt-3">
            <h5>Presensi Kelas <?php echo e($schedule->classroom_name); ?></h5>
            <hr>
            <h6>UTS</h6>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">NPM</th>
                        <th scope="col">Nama</th>
                        <th scope="col">M1</th>
                        <th scope="col">M2</th>
                        <th scope="col">M3</th>
                        <th scope="col">M4</th>
                        <th scope="col">M5</th>
                        <th scope="col">M6</th>
                        <th scope="col">M7</th>
                        <th scope="col">M8</th>
                        <th scope="col">M9</th>
                        <th scope="col">M10</th>
                        <th scope="col">Persentase</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $table1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($row->npm); ?></td>
                            <td><?php echo e($row->name); ?></td>
                            <td><?php echo e($row->week1); ?></td>
                            <td><?php echo e($row->week2); ?></td>
                            <td><?php echo e($row->week3); ?></td>
                            <td><?php echo e($row->week4); ?></td>
                            <td><?php echo e($row->week5); ?></td>
                            <td><?php echo e($row->week6); ?></td>
                            <td><?php echo e($row->week7); ?></td>
                            <td><?php echo e($row->week8); ?></td>
                            <td><?php echo e($row->week9); ?></td>
                            <td><?php echo e($row->week10); ?></td>
                            <td><?php echo e($row->percentage); ?>%</td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <hr>
            <h6>UAS</h6>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">NPM</th>
                        <th scope="col">Nama</th>
                        <th scope="col">M1</th>
                        <th scope="col">M2</th>
                        <th scope="col">M3</th>
                        <th scope="col">M4</th>
                        <th scope="col">M5</th>
                        <th scope="col">M6</th>
                        <th scope="col">M7</th>
                        <th scope="col">M8</th>
                        <th scope="col">M9</th>
                        <th scope="col">M10</th>
                        <th scope="col">M11</th>
                        <th scope="col">M12</th>
                        <th scope="col">M13</th>
                        <th scope="col">M14</th>
                        <th scope="col">Persentase</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $table2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($row->npm); ?></td>
                            <td><?php echo e($row->name); ?></td>
                            <td><?php echo e($row->week1); ?></td>
                            <td><?php echo e($row->week2); ?></td>
                            <td><?php echo e($row->week3); ?></td>
                            <td><?php echo e($row->week4); ?></td>
                            <td><?php echo e($row->week5); ?></td>
                            <td><?php echo e($row->week6); ?></td>
                            <td><?php echo e($row->week7); ?></td>
                            <td><?php echo e($row->week8); ?></td>
                            <td><?php echo e($row->week9); ?></td>
                            <td><?php echo e($row->week10); ?></td>
                            <td><?php echo e($row->week11); ?></td>
                            <td><?php echo e($row->week12); ?></td>
                            <td><?php echo e($row->week13); ?></td>
                            <td><?php echo e($row->week14); ?></td>
                            <td><?php echo e($row->percentage); ?>%</td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <form action="/dashboardlecturer/exportattendance">
                <input type="hidden" name="schedule_id" value="<?php echo e($schedule->id); ?>">
                <button class="btn rounded-bottom btn-success mx-3">
                    Export Presensi
                </button>
            </form>
        </div>
        <br>
    </main><!-- End #main -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Yana\Desktop\0.SKRIPSI\PROGRAM\UPDATE TERAKHIR FIX\Website-Absensi\resources\views/dashboard/lecturer/exportattendance.blade.php ENDPATH**/ ?>