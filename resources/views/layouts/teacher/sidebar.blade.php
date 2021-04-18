    <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
            <img src="{{asset('images/icon/2tebal-min.png')}}" alt="eRROR">
                <h4>SMK MAHAPUTRA</h4>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                            <li class="active has-sub">
                                <a href="/index_teacher">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            </li>

                            <li>
                                <a href="/teacher/list_schedule_teacher">
                                    <i class="fas fa-copy"></i>Jadwal Pelajaran</a>
                            </li>

                            <li>
                                <a href="/teacher/mysubmission/form-submission">
                                    <i class="fas fa-table"></i>Pengajuan Jadwal</a>
                            </li>

                            <li class="{{Request::path() === 'teacher/list_sa_agenda'?'active' : ''}} has-sub">
                                <a href="/teacher/list_sa_agenda">
                                    <i class="fas fa-calendar-alt"></i>Agenda Sekolah</a>
                            </li>

                            <li>
                                <a href="{{ url('/logout')}}">
                                    <i class="fas fa-power-off"></i>Logout</a>
                            </li>
                    </ul>
                </nav>
            </div>
    </aside>