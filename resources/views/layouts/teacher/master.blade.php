<!DOCTYPE html>
<html>
@include('layouts.teacher.head')

	<body class="animsition">
    <div class="page-wrapper">
    @include('layouts.teacher.sidebar');
     <div class="page-container">
	@include('layouts.teacher.header');


	<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    	@yield('content')
                    </div>
                    </div>
                </div>
            </div>
        </div>


	@include('layouts.teacher.js');


</body>
</html>
	
