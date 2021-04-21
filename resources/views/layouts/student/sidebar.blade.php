        <aside class="menu-sidebar d-none d-lg-block">
           <div class="logo">
            <img src="{{asset('images/icon/2tebal-min.png')}}" alt="eRROR">
                <h4>SMK MAHAPUTRA</h4>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">

                        <li class="{{Request::path() === 'index_student'?'active' : ''}} has-sub">
                            <a href="/index_student">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li >
                        
                        <li  class="{{Request::path() === 'student/list_schedule'?'active' : ''}} has-sub">
                            <a href="/student/list_schedule">
                                <i class="fas fa-calendar-alt"></i>Jadwal Pelajaran</a>
                        </li>

                          <li  class="{{Request::path() === 'student/list_note'?'active' : ''}} has-sub">
                            <a href="/student/list_note">
                                <i class="fas fa-edit"></i>List Catatan</a>
                        </li>

                        <li class="{{Request::path() === 'student/list_schedule_uniform'?'active' : ''}} has-sub">
                            <a href="/student/list_schedule_uniform">
                                <i class="fas fa-file-alt"></i>Jadwal Seragam</a>
                        </li>

                        <li class="{{Request::path() === 'student/list_sa_agenda'?'active' : ''}} has-sub">
                            <a href="/student/list_sa_agenda">
                                <i class="fas fa-calendar-alt"></i>Agenda Sekolah</a>
                        </li>

                       <li>
                            <a href="{{ url('/logout')}}">
                                <i class="fa fa-power-off"></i>Logout</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>