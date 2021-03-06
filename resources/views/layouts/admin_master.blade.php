<!DOCTYPE html>
<html lang="en" class="dark-sidebar">

<!-- Mirrored from codervent.com/syndash/demo/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Sep 2021 04:21:40 GMT -->
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>Syndash - Bootstrap4 Admin Template</title>
	<!--favicon-->
	<link rel="icon" href="{{ URL::to('backend/images/favicon-32x32.png')}}" type="image/png" />
	<!-- Vector CSS -->
	<link href="{{ URL::to('backend/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
	<!--plugins-->
	<link href="{{ URL::to('backend/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
	<link href="{{ URL::to('backend/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
	<link href="{{ URL::to('backend/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
	<link href="{{ URL::to('backend/plugins/Drag-And-Drop/dist/imageuploadify.min.css')}}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{ URL::to('backend/css/pace.min.css')}}" rel="stylesheet" />
	<script src="{{ URL::to('backend/js/pace.min.js')}}"></script>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ URL::to('backend/css/bootstrap.min.css')}}" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&amp;family=Roboto&amp;display=swap" />
	<!-- Icons CSS -->
	<link rel="stylesheet" href="{{ URL::to('backend/css/icons.css')}}" />
	<!-- App CSS -->
	<link rel="stylesheet" href="{{ URL::to('backend/css/app.css')}}" />
	<link rel="stylesheet" href="{{ URL::to('backend/css/dark-sidebar.css')}}" />
	<link rel="stylesheet" href="{{ URL::to('backend/css/dark-theme.css')}}" />
</head>

<body>
	<!-- wrapper -->
	<div class="wrapper">
		<!--sidebar-wrapper-->
        @include('admin.includes.sidebar')
		<!--end sidebar-wrapper-->
		<!--header-->
        @include('admin.includes.header')
		<!--end header-->
		<!--page-wrapper-->
		@yield('content')
		<!--end page-wrapper-->
		<!--start overlay-->
		<div class="overlay toggle-btn-mobile"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<!--footer -->
		<div class="footer">
			<p class="mb-0">Shop D.ark @2020 | Prod By : <a href="https://themeforest.net/user/codervent" target="_blank">T?????ng ?????p trai khoai to</a>
			</p>
		</div>
		<!-- end footer -->
	</div>
	<!-- end wrapper -->
	<!--start switcher-->
	<div class="switcher-wrapper">
		<div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
		</div>
		<div class="switcher-body">
			<h5 class="mb-0 text-uppercase">Theme Customizer</h5>
			<hr/>
			<h6 class="mb-0">Theme Styles</h6>
			<hr/>
			<div class="d-flex align-items-center justify-content-between">
				<div class="custom-control custom-radio">
					<input type="radio" id="darkmode" name="customRadio" class="custom-control-input">
					<label class="custom-control-label" for="darkmode">Dark Mode</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" id="lightmode" name="customRadio" checked class="custom-control-input">
					<label class="custom-control-label" for="lightmode">Light Mode</label>
				</div>
			</div>
			<hr/>
			<div class="custom-control custom-switch">
				<input type="checkbox" class="custom-control-input" id="DarkSidebar">
				<label class="custom-control-label" for="DarkSidebar">Dark Sidebar</label>
			</div>
			<hr/>
			<div class="custom-control custom-switch">
				<input type="checkbox" class="custom-control-input" id="ColorLessIcons">
				<label class="custom-control-label" for="ColorLessIcons">Color Less Icons</label>
			</div>
		</div>
	</div>
	<!--end switcher-->
	<!-- JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="{{ URL::to('backend/js/jquery.min.js')}}"></script>
	<script src="{{ URL::to('backend/js/popper.min.js')}}"></script>
	<script src="{{ URL::to('backend/js/bootstrap.min.js')}}"></script>
	<!--plugins-->
	<script src="{{ URL::to('backend/plugins/simplebar/js/simplebar.min.js')}}"></script>
	<script src="{{ URL::to('backend/plugins/metismenu/js/metisMenu.min.js')}}"></script>
	<script src="{{ URL::to('backend/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
    <script src="{{ URL::to('backend/plugins/input-tags/js/tagsinput.js')}}"></script>
    <script src="{{ URL::to('backend/js/bs-custom-file-input.min.js')}}"></script>
	<!-- Vector map JavaScript -->

	<script src="{{ URL::to('backend/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
	<script src="{{ URL::to('backend/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
	<script src="{{ URL::to('backend/plugins/vectormap/jquery-jvectormap-in-mill.js')}}"></script>
	<script src="{{ URL::to('backend/plugins/vectormap/jquery-jvectormap-us-aea-en.js')}}"></script>
	<script src="{{ URL::to('backend/plugins/vectormap/jquery-jvectormap-uk-mill-en.js')}}"></script>
	<script src="{{ URL::to('backend/plugins/vectormap/jquery-jvectormap-au-mill.js')}}"></script>
	<script src="{{ URL::to('backend/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script>
	<script src="Backend/js/index.js"></script>



	<!-- App JS -->
	<script src="{{ URL::to('backend/js/app.js')}}"></script>

    @stack('script')

</body>


<!-- Mirrored from codervent.com/syndash/demo/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Sep 2021 04:23:21 GMT -->
</html>
