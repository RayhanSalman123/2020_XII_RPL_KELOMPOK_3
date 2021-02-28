<!DOCTYPE html>
<html>
@include('layouts.head_master.head')

	<body class="animsition">
    <div class="page-wrapper">
    @include('layouts.head_master.sidebar');
     <div class="page-container">
	@include('layouts.head_master.header');


	<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    	@yield('content')
                    </div>
                    </div>
                </div>
            </div>
        </div>


	@include('layouts.head_master.js');


</body>
</html>
	
