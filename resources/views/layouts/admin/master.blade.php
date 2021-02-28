<!DOCTYPE html>
<html>
@include('layouts.admin.head')

	<body>
    <div class="page-wrapper">
    @include('layouts.admin.sidebar')
 <div class="page-container">
	@include('layouts.admin.header')


	<div class="main-content">

                <div class="section__content section__content--p30">
                        <div class="container-fluid">
                        	@yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @include('sweetalert::alert')
	@stack('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script type="text/javascript">
        $('.select2').select2({
        });
</body>
</html>

