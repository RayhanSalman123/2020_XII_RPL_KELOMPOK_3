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
                            <a href="/index_teacher">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fas fa-table"></i>Pengajuan Jadwal</a>
                        </li>

                        <li>
                            <a href="/list_subject">
                                <i class="fas fa-copy"></i>Mata Pelajaran</a>
                        </li>

                        <li>
                            <a href="{{ url('/logout')}}">
                                <i class="fas fa-power-off"></i>Logout</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>