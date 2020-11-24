        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a href="/index_admin">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="{{ url('/admin/confirm_headmaster') }}">
                                <i class="fas fa-chart-bar"></i>Konfirmasi KEPSEK</a>
                        </li>
                        <li>
                            <a href="/list_teacher">
                                <i class="fas fa-table"></i>List Guru</a>
                        </li>
                        <li>
                            <a href="/list_class">
                                <i class="fas fa-calendar"></i>List Kelas</a>
                        </li>
                        <li>
                            <a href="/list_subject">
                                <i class="far fa-check-square"></i>List Mata Pelajaran</a>
                        </li>
                        <li>
                            <a href="/list_submission_teacher">
                                <i class="fas fa-calendar-alt"></i>Pengajuan Guru</a>
                        </li>
                        <li>
                            <a href="/list_schedule">
                                <i class="fas fa-map-marker-alt"></i>Jadwal Pelajaran</a>
                        </li>
                        <li>
                            <a href="{{ url('/logout')}}">
                                <i class="fa fa-power-off"></i>Logout</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>