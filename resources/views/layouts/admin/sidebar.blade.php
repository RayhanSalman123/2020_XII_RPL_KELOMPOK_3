        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
            <img src="{{asset('images/icon/22.png')}}" alt="eRROR">
                <h4>SMK MAHAPUTRA</h4>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="{{Request::path() === 'admin/index_admin'?'active' : ''}} has-sub">
                            <a href="/admin/index_admin">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li >
                        <li  class="{{Request::path() === 'admin/list_teacher'?'active' : ''}} has-sub">
                            <a href="/admin/list_teacher">
                                <i class="fas fa-table"></i>List Guru</a>
                        </li>
                          <li  class="{{Request::path() === 'admin/manage_major'?'active' : ''}} has-sub">
                            <a href="/admin/manage_major    ">
                                <i class="fas fa-table"></i>List Jurusan</a>
                        </li>
                        <li class="{{Request::path() === 'admin/list_class'?'active' : ''}} has-sub">
                            <a href="/admin/list_class">
                                <i class="fas fa-calendar"></i>List Kelas</a>
                        </li>
                        <li class="{{Request::path() === 'admin/list_curriculum'?'active' : ''}} has-sub">
                            <a href="/admin/list_curriculum">
                                <i class="fas fa-calendar"></i>List Kurikulum</a>
                        </li>
                        <li class="{{Request::path() === 'admin/list_school_year'?'active' : ''}} has-sub">
                            <a href="/admin/list_school_year">
                                <i class="fas fa-calendar"></i>List Tahun Ajaran</a>
                        </li>
                        <li class="{{Request::path() === 'admin/list_subject_admin'?'active' : ''}} has-sub">
                            <a href="/admin/list_subject_admin">
                                <i class="far fa-check-square"></i>List Mata Pelajaran</a>
                        </li>
                        <li class="{{Request::path() === 'admin/list_schedule_admin'?'active' : ''}} has-sub">
                            <a href="/admin/list_schedule_admin">
                                <i class="fas fa-map-marker-alt"></i>Jadwal Pelajaran</a>
                        </li>
                        <li class="{{Request::path() === 'admin/list_submission_admin'?'active' : ''}} has-sub">
                            <a href="/admin/list_submission_admin">
                                <i class="fas fa-calendar-alt"></i>Pengajuan Guru</a>
                        </li>
                        <li class="{{Request::path() === 'admin/confirm_headmaster'?'active' : ''}} has-sub">
                            <a href="/admin/confirm_headmaster">
                                <i class="fas fa-chart-bar"></i>Konfirmasi KEPSEK</a>
                        </li>
                        
                        <li>
                            <a href="{{ url('/logout')}}">
                                <i class="fa fa-power-off"></i>Logout</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>