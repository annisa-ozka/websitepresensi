

<?php $__env->startSection('container'); ?>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1><?php echo e($page); ?></h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboardlecturer"><?php echo e($page); ?></a></li>
                    <li class="breadcrumb-item"><a href="/dashboardlecturer/attendance">Presensi</a></li>
                    <li class="breadcrumb-item active"><?php echo e($absents->first()->schedule->classroom_name); ?></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <?php if(session()->has('success')): ?>
            <div class="alert alert-success col-lg-8" role="alert">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>
        <section class="section">
            <h5 class="card-title">Cari Kelas</h5>
            <form action="/dashboardlecturer/attendancedetail">
                <div class="row mb-4">
                    <div class="col">
                        <label for="classroom_name" class="form-label">Pilih Kelas</label>
                        <select id="classroom_name" class="form-select" name="schedule_id" required>
                            <option value="" style="display: none;">--Pilih Kelas--</option>
                            <?php $__currentLoopData = $schedules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $schedule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($schedule->id); ?>"
                                    <?php echo e($schedule->id == old('schedule_id', Request::input('schedule_id')) ? 'selected' : ''); ?>>
                                    <?php echo e($schedule->classroom_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="col">

                        <label for="week" class="form-label">Minggu ke-</label>
                        <br>
                        <input type="number" name="week" min="1" max="14" required
                            value="<?php echo e(old('number_input', Request::input('week'))); ?>">
                        
                    </div>
                    <div class="col">
                        <br>
                        <button id="submit-button" class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
            <hr>

        </section>
        <section class="section">
            <div>
                <div class="row mb-4">
                    <div class="col">
                        <label class="form-label" for="form6Example1">Kelas :
                            <?php echo e($absents->first()->schedule->classroom_name); ?></label>
                    </div>
                    <div class="col">
                        <label class="form-label" for="form6Example1">Matakuliah :
                            <?php echo e($absents->first()->schedule->course_name); ?></label>
                    </div>
                    <div class="col">
                        <label class="form-label" for="form6Example1">Minggu Ke- : <?php echo e($absents->first()->week); ?></label>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <label class="form-label" for="form6Example1">Fakultas :
                            <?php echo e($absents->first()->student->classroom->major->faculty->name); ?></label>
                    </div>
                    <div class="col">
                        <label class="form-label" for="form6Example1">SKS :
                            <?php echo e($absents->first()->schedule->course->SKS); ?></label>
                    </div>
                    <div class="col">
                        <label class="form-label" for="form6Example1">Lokasi Kuliah :
                            <?php echo e($absents->first()->schedule->location_name); ?></label>
                    </div>

                </div>
                <div class="row mb-4">
                    <div class="col">
                        <label class="form-label" for="form6Example1">Jurusan :
                            <?php echo e($absents->first()->student->classroom->major->name); ?>

                        </label>
                    </div>
                    <div class="col">
                        <label class="form-label" for="form6Example1">Tahun Ajaran :
                            <?php echo e($absents->first()->schedule->academic_year); ?>

                        </label>
                    </div>
                    <div class="col">
                        <label class="form-label" for="form6Example1">Jam Perkuliahan :
                            <?php echo e($absents->first()->schedule->time_description); ?>

                        </label>
                    </div>

                </div>
                <div class="row mb-4 ">
                    <div class="col">
                        <label class="form-label" for="form6Example1">Region :
                            <?php echo e($absents->first()->student->classroom->region); ?>

                        </label>
                    </div>
                    <div class="col">
                        <label class="form-label" for="form6Example1">Jumlah Mahasiswa :
                            <?php echo e($absents->first()->schedule->total_students); ?>

                        </label>
                    </div>
                    <div class="col">
                        <label class="form-label" for="form6Example1">
                        </label>
                    </div>
                </div>
            </div>
            <div class="my-1">
                <form action="/dashboardlecturer/printattendance">
                    <input type="hidden" name="schedule_id" value="<?php echo e($absents->first()->schedule->id); ?>">
                    <button class="btn rounded-bottom btn-primary">Lihat Hasil Presensi</button>
                </form>
            </div>
            
            <div id="presensi">
                <h5 class="card-title">Table Presensi</h5>
                <form action="/dashboardlecturer/attendancedetail" method="post">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="week" value="<?php echo e($absents->first()->week); ?>">
                    <input type="hidden" name="schedule_id" value="<?php echo e($absents->first()->schedule_id); ?>">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">NPM</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Hadir</th>
                                <th scope="col">Alpha</th>
                                <th scope="col">Izin</th>
                                <th scope="col">Sakit</th>
                                <th scope="col">Status Terakhir</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $absents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $absent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($absent->student->npm); ?></td>
                                    <td><?php echo e($absent->student->name); ?></td>
                                    <td>
                                        <div class="form-check">
                                            <input value="1" class="form-check-input" type="radio"
                                                name="attendance[<?php echo e($absent->student_id); ?>]">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input value="2" class="form-check-input" type="radio"
                                                name="attendance[<?php echo e($absent->student_id); ?>]">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input value="3" class="form-check-input" type="radio"
                                                name="attendance[<?php echo e($absent->student_id); ?>]">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input value="4" class="form-check-input" type="radio"
                                                name="attendance[<?php echo e($absent->student_id); ?>]">
                                        </div>
                                    </td>
                                    <?php if(isset($absent->absenttype->name)): ?>
                                        <td><?php echo e($absent->absenttype->name); ?></td>
                                    <?php endif; ?>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
            </div>
            <div class="d-flex justify-content-end col-sm-11">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
            </form>
            <!-- End Default Table Example -->
            </div>
        </section>
    </main><!-- End #main -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Yana\Desktop\0.SKRIPSI\PROGRAM\UPDATE TERAKHIR FIX\Website-Absensi\resources\views/dashboard/lecturer/attendancedetail.blade.php ENDPATH**/ ?>