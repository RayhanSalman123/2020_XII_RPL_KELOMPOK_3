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
<<<<<<< HEAD
<<<<<<< HEAD
=======
    @include('sweetalert::alert')

=======
>>>>>>> 50305447e90bc56cd185aeacb1d5b0f9b46469ad
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script type="text/javascript">
        $('.select2').select2({
        });
<<<<<<< HEAD
=======
    @include('sweetalert::alert')

>>>>>>> b2c173aa8e6040701bdd573fafff18e504b29ab5
=======
>>>>>>> 36ef6ce18366da40401f2319eb746aaaf7350f99
>>>>>>> 50305447e90bc56cd185aeacb1d5b0f9b46469ad
</body>
</html>

