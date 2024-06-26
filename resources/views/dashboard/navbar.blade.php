  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
      {{-- Logo --}}
      <div class="d-flex align-items-center justify-content-between">
          <a href="#" class="logo d-flex align-items-center">
              <img src="../img/gundar.png" alt="gundar">
              <span class="d-none d-lg-block">Website Presensi Teknik Informatika</span>
          </a>
          <i class="bi bi-list toggle-sidebar-btn"></i>
      </div>
      {{-- Profile --}}
      <nav class="header-nav ms-auto">
          <ul class="d-flex align-items-center">
              <li class="nav-item dropdown pe-3">
                  <a class="nav-link nav-profile d-flex align-items-center" href="#" data-bs-toggle="dropdown">
                      {{-- <img src="../assets/img/profile-img.jpg" alt="Profile" class="rounded-circle"> --}}
                      <h6>{{ auth()->user()->name }}
                          <br>
                          <span>{{ auth()->user()->email }}</span>
                      </h6>
                  </a>
                  <div class="dropdown-menu">
                      <a class="dropdown-item" href="/dashboard/profile">Profile</a>
                      <form method="POST" action="{{ route('logout') }}">
                          @csrf
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
          {{-- Sidebar for admin --}}
          @if (auth()->user()->usertype->type == 'admin')
              <li class="nav-item">
                  <a class="nav-link {{ Request::is('dashboardadmin') ? '' : 'collapsed' }} " href="/dashboardadmin">
                      <i class="bi bi-grid"></i>
                      <span>Dashboard</span>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link {{ Request::is('dashboardadmin/lecturersetting') ? '' : 'collapsed' }} "
                      href="/dashboardadmin/lecturersetting">
                      <i class="bi bi-person"></i>
                      <span>Pengaturan Dosen</span>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link {{ Request::is('dashboardadmin/studentsetting') ? '' : 'collapsed' }}"
                      href="/dashboardadmin/studentsetting">
                      <i class="bi bi-person"></i>
                      <span>Pengaturan Mahasiswa</span>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link {{ Request::is('dashboardadmin/minimumattendance') ? '' : 'collapsed' }}"
                      href="/dashboardadmin/minimumattendance">
                      <i class="bi bi-bar-chart"></i>
                      <span>Kehadiran Minimum</span>
                  </a>
              </li>
          @endif

          {{-- Sidebar For Lecturer --}}
          @if (auth()->user()->usertype->type == 'lecturer')
              <li class="nav-item">
                  <a class="nav-link {{ Request::is('dashboardlecturer') ? '' : 'collapsed' }} "
                      href="/dashboardlecturer">
                      <i class="bi bi-grid"></i>
                      <span>Dashboard</span>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link {{ Request::is('dashboardlecturer/attendance') ? '' : 'collapsed' }}"
                      href="/dashboardlecturer/attendance">
                      <i class="bi bi-layout-text-window-reverse"></i>
                      <span>Presensi</span>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link {{ Request::is('dashboardlecturer/utslist') ? '' : 'collapsed' }}"
                      href="/dashboardlecturer/utslist">
                      <i class="bi bi-journal-text"></i>
                      <span>List UTS</span>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link {{ Request::is('dashboardlecturer/uaslist') ? '' : 'collapsed' }}"
                      href="/dashboardlecturer/uaslist">
                      <i class="bi bi-journal-text"></i>
                      <span>List UAS</span>
                  </a>
              </li>
          @endif

          {{-- Sidebar For Student --}}
          @if (auth()->user()->usertype->type == 'student')
              <li class="nav-item">
                  <a class="nav-link {{ Request::is('dashboardstudent') ? '' : 'collapsed' }} "
                      href="/dashboardstudent">
                      <i class="bi bi-grid"></i>
                      <span>Dashboard</span>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link {{ Request::is('dashboardstudent/attendance') ? '' : 'collapsed' }}"
                      href="/dashboardstudent/attendance">
                      <i class="bi bi-layout-text-window-reverse"></i>
                      <span>Presensi</span>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link {{ Request::is('dashboardstudent/utscard') ? '' : 'collapsed' }}"
                      href="/dashboardstudent/utscard">
                      <i class="bi bi-journal-text"></i>
                      <span>Kartu UTS</span>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link {{ Request::is('dashboardstudent/uascard') ? '' : 'collapsed' }}"
                      href="/dashboardstudent/uascard">
                      <i class="bi bi-journal-text"></i>
                      <span>Kartu UAS</span>
                  </a>
              </li>
          @endif
      </ul>
  </aside>
