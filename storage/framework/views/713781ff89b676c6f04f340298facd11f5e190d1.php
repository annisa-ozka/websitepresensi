  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
      
      <div class="d-flex align-items-center justify-content-between">
          <a href="#" class="logo d-flex align-items-center">
              <img src="../img/gundar.png" alt="gundar">
              <span class="d-none d-lg-block">Website Presensi Teknik Informatika</span>
          </a>
          <i class="bi bi-list toggle-sidebar-btn"></i>
      </div>
      
      <nav class="header-nav ms-auto">
          <ul class="d-flex align-items-center">
              <li class="nav-item dropdown pe-3">
                  <a class="nav-link nav-profile d-flex align-items-center" href="#" data-bs-toggle="dropdown">
                      
                      <h6><?php echo e(auth()->user()->name); ?>

                          <br>
                          <span><?php echo e(auth()->user()->email); ?></span>
                      </h6>
                  </a>
                  <div class="dropdown-menu">
                      <a class="dropdown-item" href="/dashboard/profile">Profile</a>
                      <form method="POST" action="<?php echo e(route('logout')); ?>">
                          <?php echo csrf_field(); ?>
                          <button type="submit" class="dropdown-item">Logout</button>
                      </form>
                  </div>
              </li>
          </ul>
      </nav>
  </header>

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
      <ul class="sidebar-nav" id="sidebar-nav">
          
          <?php if(auth()->user()->usertype->type == 'admin'): ?>
              <li class="nav-item">
                  <a class="nav-link <?php echo e(Request::is('dashboardadmin') ? '' : 'collapsed'); ?> " href="/dashboardadmin">
                      <i class="bi bi-grid"></i>
                      <span>Dashboard</span>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link <?php echo e(Request::is('dashboardadmin/lecturersetting') ? '' : 'collapsed'); ?> "
                      href="/dashboardadmin/lecturersetting">
                      <i class="bi bi-person"></i>
                      <span>Pengaturan Dosen</span>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link <?php echo e(Request::is('dashboardadmin/studentsetting') ? '' : 'collapsed'); ?>"
                      href="/dashboardadmin/studentsetting">
                      <i class="bi bi-person"></i>
                      <span>Pengaturan Mahasiswa</span>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link <?php echo e(Request::is('dashboardadmin/minimumattendance') ? '' : 'collapsed'); ?>"
                      href="/dashboardadmin/minimumattendance">
                      <i class="bi bi-bar-chart"></i>
                      <span>Kehadiran Minimum</span>
                  </a>
              </li>
          <?php endif; ?>

          
          <?php if(auth()->user()->usertype->type == 'lecturer'): ?>
              <li class="nav-item">
                  <a class="nav-link <?php echo e(Request::is('dashboardlecturer') ? '' : 'collapsed'); ?> "
                      href="/dashboardlecturer">
                      <i class="bi bi-grid"></i>
                      <span>Dashboard</span>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link <?php echo e(Request::is('dashboardlecturer/attendance') ? '' : 'collapsed'); ?>"
                      href="/dashboardlecturer/attendance">
                      <i class="bi bi-layout-text-window-reverse"></i>
                      <span>Presensi</span>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link <?php echo e(Request::is('dashboardlecturer/utslist') ? '' : 'collapsed'); ?>"
                      href="/dashboardlecturer/utslist">
                      <i class="bi bi-journal-text"></i>
                      <span>List UTS</span>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link <?php echo e(Request::is('dashboardlecturer/uaslist') ? '' : 'collapsed'); ?>"
                      href="/dashboardlecturer/uaslist">
                      <i class="bi bi-journal-text"></i>
                      <span>List UAS</span>
                  </a>
              </li>
          <?php endif; ?>

          
          <?php if(auth()->user()->usertype->type == 'student'): ?>
              <li class="nav-item">
                  <a class="nav-link <?php echo e(Request::is('dashboardstudent') ? '' : 'collapsed'); ?> "
                      href="/dashboardstudent">
                      <i class="bi bi-grid"></i>
                      <span>Dashboard</span>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link <?php echo e(Request::is('dashboardstudent/attendance') ? '' : 'collapsed'); ?>"
                      href="/dashboardstudent/attendance">
                      <i class="bi bi-layout-text-window-reverse"></i>
                      <span>Presensi</span>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link <?php echo e(Request::is('dashboardstudent/utscard') ? '' : 'collapsed'); ?>"
                      href="/dashboardstudent/utscard">
                      <i class="bi bi-journal-text"></i>
                      <span>Kartu UTS</span>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link <?php echo e(Request::is('dashboardstudent/uascard') ? '' : 'collapsed'); ?>"
                      href="/dashboardstudent/uascard">
                      <i class="bi bi-journal-text"></i>
                      <span>Kartu UAS</span>
                  </a>
              </li>
          <?php endif; ?>
      </ul>
  </aside>
<?php /**PATH C:\Users\Yana\Desktop\0.SKRIPSI\PROGRAM\UPDATE TERAKHIR FIX\Website-Absensi\resources\views/dashboard/navbar.blade.php ENDPATH**/ ?>