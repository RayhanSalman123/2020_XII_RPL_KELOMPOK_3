        <aside class="menu-sidebar d-none d-lg-block">
           <div class="logo">
            <img src="{{asset('images/icon/2tebal-min.png')}}" alt="eRROR">
                <h4>SMK MAHAPUTRA</h4>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="{{Request::path() === 'list_schedule'?'active' : ''}} has-sub">
                            <a href="/list_schedule">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li >
                        
                        <li  class="{{Request::path() === 'student/list_note'?'active' : ''}} has-sub">
                            <a href="/student/list_note">
                                <i class="fas fa-edit"></i>List Catatan</a>
                        </li>

                       <li>
                            <a href="{{ url('/logout')}}">
                                <i class="fa fa-power-off"></i>Logout</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>