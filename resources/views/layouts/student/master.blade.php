<!DOCTYPE html>
<html lang="en">
@include('layouts.student.head')

<body class="animsition">
    <div class="page-wrapper">
        @include('layouts.student.header-m')
    @include('layouts.student.sidebar');
     <div class="page-container">
	@include('layouts.student.header');


	<div class="main-content">
                
                    	@yield('content')
                    
        </div>
    </div>
</div>


@include('layouts.student.js');
</body>
</html>
	
