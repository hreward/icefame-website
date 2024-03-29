<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Icefame</title>
	<base href="/">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Icefame">
    <meta name="keywords" content="Icefame">
    <meta name="author" content="Icefame">
	<link rel="icon" type="image/x-icon" href="favicon.ico">
	<link rel="manifest" href="manifest.webmanifest">
	<meta name="theme-color" content="#1976d2">
	<link id="change-link" rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/app.css">
</head>
<body>
	@include("partials.menu")
    @include("partials.pageheader")
	
    @yield("pagecontent")


	@include("partials.footer")
	<!-- tap to top -->
	<div class="tap-top">
		<div>
			<i class="fa fa-angle-double-up"></i>
		</div>
	</div>
	<!-- tap to top End -->
	
    <!-- latest jquery-->
	<script src="assets/js/jquery-3.6.0.min.js"></script>
	<!-- Bootstrap js-->
	<script src="assets/js/bootstrap.js"></script>
	<!-- lazyload js-->
	<script src="assets/js/lazysizes.min.js"></script>
	<script src="assets/js/feather.min.js"></script>
	<!-- theme setting js-->
	<script src="assets/js/theme-setting.js"></script>
	<!-- Theme js-->
	<script src="assets/js/script.js"></script>

</body>

</html>
