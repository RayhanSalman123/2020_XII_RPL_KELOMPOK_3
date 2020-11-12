<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">{{Auth::user()->usr_name}}</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span></div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="index.html"><em class="fa fa-ellipsis-v">&nbsp;</em><span>DASHBOARD</span></a></li>
			<li><a href="#"><em class="fa fa-calendar">&nbsp;</em>Kelola Kepala Sekolah</a></li>
			<li><a href="#"><em class="fa fa-bar-chart">&nbsp;</em>Kelola Mata Pelajaran</a>
			<li><a href="#"><em class="fa fa-toggle-off">&nbsp;</em>Kelola Guru</a></li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-navicon">&nbsp;</em>Kelola Kelas<span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> X - RPL
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> X - Multimedia
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> XI - RPL
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> XI - Multimedia
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> XII - RPL
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> XII - Multimedia
					</a></li>
				</ul>
			</li>
		</li>
		<li><a href="{{ url('/logout')}}"><em class="fa fa-power-off">&nbsp;</em>Logout</a></li>          
		</ul>
	</div><!--/.sidebar-->