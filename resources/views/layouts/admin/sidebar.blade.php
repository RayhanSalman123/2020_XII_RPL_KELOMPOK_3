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

                        <li class="sidebar-dropdown">
                          <a href="javaScript:void();" class="waves-effect">
                            <i class="fas fa-tachometer-alt"></i> <span>Kelola Data</span> <i class="fa fa-angle-left pull-right"></i>
                          </a>
                          <ul class="sidebar-submenu" style="display: none;">
                            <li class="{{Request::path() === 'admin/list_teacher'?'active' : ''}} has-sub"><a href="{{ url('admin/list_teacher') }}"><i class="fa fa-circle-o"></i>Data Guru</a></li>

                            <li class="{{Request::path() === 'admin/list_class'?'active' : ''}} has-sub"><a href="{{url('admin/list_class')}}"><i class="fa fa-circle-o"></i>Data Kelas</a></li>

                            <li  class="{{Request::path() === 'admin/manage_major'?'active' : ''}} has-sub"><a href="{{url('admin/manage_major')}}"><i class="fa fa-circle-o"></i>Data Jurusan</a></li>

                            <li class="{{Request::path() === 'admin/list_grade'?'active' : ''}} has-sub"><a href="{{url('admin/list_grade')}}"><i class="fa fa-circle-o"></i>Data Tingkatan</a></li>

                            <li  class="{{Request::path() === 'admin/list_curriculum'?'active' : ''}} has-sub"><a href="{{url('admin/list_curriculum')}}"><i class="fa fa-circle-o"></i>Data Kurikulum</a></li>

                            <li  class="{{Request::path() === 'admin/list_school_year'?'active' : ''}} has-sub"><a href="{{url('admin/list_school_year')}}"><i class="fa fa-circle-o"></i>Data Tahun Ajaran</a></li>

                            <li  class="{{Request::path() === 'admin/list_uniform'?'active' : ''}} has-sub"><a href="{{url('/admin/list_uniform')}}"><i class="fa fa-circle-o"></i> Data Seragam</a></li>

                            <li class="{{Request::path() === 'admin/list_subject_admin'?'active' : ''}} has-sub"><a href="{{url('/admin/list_subject_admin')}}"><i class="fa fa-circle-o"></i> Data Mata Pelajaran</a></li>
                          </ul>
                        </li>


                         <li  class="{{Request::path() === 'admin/manage_subject'?'active' : ''}} has-sub">
                            <a href="/admin/manage_subject    ">
                                <i class="fa fa-group"></i>Manage Guru Mapel</a>
                        </li>


                         <li class="sidebar-dropdown">
                          <a href="javaScript:void();" class="waves-effect">
                            <i class="fas fa-tachometer-alt"></i> <span>Kelola Jadwal</span> <i class="fa fa-angle-left pull-right"></i>
                          </a>
                          <ul class="sidebar-submenu" style="display: none;">
                            <li class="{{Request::path() === 'admin/list_schedule_admin'?'active' : ''}} has-sub"><a href="{{url('admin/manage_schedule')}}"><i class="fa fa-circle-o"></i> Input Jadwal Pelajaran </a></li>

                            <li class="{{Request::path() === 'admin/list_schedule_admin'?'active' : ''}} has-sub"><a href="{{url('admin/list_schedule')}}"><i class="fa fa-circle-o"></i> Jadwal Pelajaran </a></li>

                            <li class="{{Request::path() === 'admin/list_schedule_uniform'?'active' : ''}} has-sub"><a href="{{url('admin/list_schedule_uniform')}}"><i class="fa fa-circle-o"></i> Jadwal Seragam</a></li>

                            <li class="{{Request::path() === 'admin/list_sa_agenda'?'active' : ''}} has-sub"><a href="{{url('admin/list_sa_agenda')}}"><i class="fa fa-circle-o"></i>Kegiatan Sekolah</a></li>
                          </ul>
                        </li>


                        <li class="{{Request::path() === 'admin/list_submission_admin'?'active' : ''}} has-sub">
                            <a href="/admin/list_submission_admin">
                                <i class="fa fa-user"></i>Pengajuan Guru</a>
                        </li>


                        <li>
                            <a href="{{ url('/logout')}}">
                                <i class="fa fa-power-off"></i>Logout</a>
                        </li>

                    </ul>
                </nav>
            </div>
        </aside>


