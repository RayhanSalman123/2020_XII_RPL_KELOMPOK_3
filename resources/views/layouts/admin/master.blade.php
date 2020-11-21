<!DOCTYPE html>
<html>
@include('layouts.admin.head')

	<body class="animsition">
    <div class="page-wrapper">
    @include('layouts.admin.sidebar');
 <div class="page-container">
	@include('layouts.admin.header');


	<div class="main-content">
        
                <div class="section__content section__content--p30">
                        <div class="container-fluid">
                        	@yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>

	@include('layouts.admin.js');


</body>
</html>
	
