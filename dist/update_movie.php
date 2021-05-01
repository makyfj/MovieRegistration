<?php
// Include config file
require_once "admin/config.php";

$query = "SELECT * FROM customers ORDER BY ID DESC";
$result = mysqli_query($link, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 11]>
    	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    	<![endif]-->
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="DashboardKit is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
	<meta name="keywords" content="DashboardKit, Dashboard Kit, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Free Bootstrap Admin Template">
	<meta name="author" content="DashboardKit ">


	<!-- Favicon icon -->
	<link rel="icon" href="assets/images/favicon.svg" type="image/x-icon">

	<!-- font css -->
	<link rel="stylesheet" href="assets/fonts/feather.css">
	<link rel="stylesheet" href="assets/fonts/fontawesome.css">
	<link rel="stylesheet" href="assets/fonts/material.css">

	<!-- vendor css -->
	<link rel="stylesheet" href="assets/css/style.css" id="main-style-link">



	<title>All Customers</title>

</head>

<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ Mobile header ] start -->
	<div class="pc-mob-header pc-header">
		<div class="pcm-logo">
			<img src="assets/images/moviesLogo.png" alt="" class="logo logo-lg">
		</div>
		<div class="pcm-toolbar">
			<a href="#!" class="pc-head-link" id="mobile-collapse">
				<div class="hamburger hamburger--arrowturn">
					<div class="hamburger-box">
						<div class="hamburger-inner"></div>
					</div>
				</div>
			</a>
			<a href="#!" class="pc-head-link" id="headerdrp-collapse">
				<i data-feather="align-right"></i>
			</a>
			<a href="#!" class="pc-head-link" id="header-collapse">
				<i data-feather="more-vertical"></i>
			</a>
		</div>
	</div>
	<!-- [ Mobile header ] End -->

	<!--include navigation menu start-->
	<?php require("left_nav.php"); ?>
	<!--include navigation menu end-->


	<!-- [ Header ] start -->
	<header class="pc-header ">
		<!--include header start-->
		<header class="pc-header ">
			<?php require("header.php"); ?>
		</header>
		<!--include header end-->
	</header>
	<!-- [ Header ] end -->

	<!-- [ Main Content ] start -->
	<div class="pc-container">
		<div class="pcoded-content">
			<!-- [ breadcrumb ] start -->
			<div class="page-header">
				<div class="page-block">
					<div class="row align-items-center">
						<div class="col-md-12">
							<div class="page-header-title">
								<h5 class="m-b-10">Movies</h5>
							</div>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Home</a></li>
								<li class="breadcrumb-item">Update Movie</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- [ breadcrumb ] end -->
			<!-- [ Main Content ] start -->
			<div class="row">
				<!-- [ sample-page ] start -->
				<div class="col-sm-12">
					<div class="card">
						<div class="card-body">

							<h3 align="center">Update Movie</h3>

							<div class="table-responsive  container-fluid ">
								<hr />

								<form class="row g-3 " action="updateMovies.php" method="post" enctype="multipart/form-data">


									<div class="col-md-12 border-left">
										<div class="row">

											<div class="col-md-6 col-sm-12">
												<label for="title" class="form-label">Id</label>
												<div class="input-group">
													<input type="text" class="form-control" id="id" name="id" aria-describedby="inputGroupPrepend" placeholder="Movie Id">
												</div>
											</div>
											<div class="col-md-6 col-sm-12">
												<label for="title" class="form-label">Title</label>
												<div class="input-group">
													<input type="text" class="form-control" id="title" name="title" aria-describedby="inputGroupPrepend" placeholder="Movie title">
												</div>
											</div>
											<div class="col-md-6 col-sm-12">
												<label for="title" class="form-label">Genre</label>
												<div class="input-group">
													<input type="text" class="form-control" id="genre" name="genre" aria-describedby="inputGroupPrepend" placeholder="Movie genre">
												</div>
											</div>
											<div class="col-md-6 col-sm-12">
												<label for="title" class="form-label">Director</label>
												<div class="input-group">
													<input type="text" class="form-control" id="director" name="director" aria-describedby="inputGroupPrepend" placeholder="Movie director">
												</div>
											</div>
											<div class="col-md-6 col-sm-12">
												<label for="title" class="form-label">Language</label>
												<div class="input-group">
													<input type="text" class="form-control" id="language" name="language" aria-describedby="inputGroupPrepend" placeholder="Movie language">
												</div>
											</div>

										</div>

										<div class="row">
											<button type="submit" class="btn btn-outline-primary mt-3">
												Submit&nbsp;&nbsp;
												<i class=" fa fa-paper-plane" aria-hidden="true"></i>
											</button>

										</div>

									</div>
								</form>

							</div>
						</div>

					</div>
					<!-- [ Footer ] start -->
					<div class="container-fluid rounded bg-blue-100 mt-1">
						<!--include footer start-->
						<?php require("footer.php"); ?>
						<!--include footer end-->
					</div>
					<!-- [ Footer ] end -->
				</div>
				<!-- [ sample-page ] end -->
			</div>
			<!-- [ Main Content ] end -->
		</div>
	</div>
	<!-- [ Main Content ] end -->
	<!-- Warning Section start -->
	<!-- Older IE warning message -->
	<!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
               <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="assets/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="assets/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="assets/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="assets/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="assets/images/browser/ie.png" alt="">
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
	<!-- Warning Section Ends -->
	<!-- Required Js -->
	<script src="assets/js/vendor-all.min.js"></script>
	<script src="assets/js/plugins/bootstrap.min.js"></script>
	<script src="assets/js/plugins/feather.min.js"></script>
	<script src="assets/js/pcoded.min.js"></script>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script> -->
	<!-- <script src="assets/js/plugins/clipboard.min.js"></script> -->
	<!-- <script src="assets/js/uikit.min.js"></script> -->





	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />


	<script>
		$(document).ready(function() {
			$('#employee_data').DataTable();
		});
	</script>
</body>

</html>
