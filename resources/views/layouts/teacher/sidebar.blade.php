        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <h3>SMK MAHAPUTRA</h3>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a href="/index_teacher">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>

                        <li>
                            <a href="form-submission">
                                <i class="fas fa-table"></i>Pengajuan Jadwal</a>
                        </li>

                        <li>
                            <a href="/list_schedule_teacher">
                                <i class="fas fa-copy"></i>Jadwal Pelajaran</a>
                        </li>

                        <li>
                            <a href="{{ url('/logout')}}">
                                <i class="fas fa-power-off"></i>Logout</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>