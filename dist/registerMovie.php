<!DOCTYPE html>
<html lang="en">

<head>
	<title>Form Validation - Custom Style Example</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<!-- Favicon icon -->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

	<!-- font css -->
	<link rel="stylesheet" href="assets/fonts/feather.css">
	<link rel="stylesheet" href="assets/fonts/fontawesome.css">
	<link rel="stylesheet" href="assets/fonts/material.css">
	<script src="js/includeHtml.js"></script>
	<!-- vendor css -->
	<link rel="stylesheet" href="assets/css/style.css" id="main-style-link">



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
			<img src="assets/images/logo-white.png" alt="" class="logo logo-lg">
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

	<!-- [ navigation menu ] start -->

	<!--include navigation menu start-->
	<?php require("left_nav.php"); ?>
	<!--include navigation menu end-->

	<!-- [ navigation menu ] end -->

	<!-- [ Header ] start -->
	<header class="pc-header ">
		<!--include header start-->
		<header class="pc-header ">
			<?php require("header_1.php"); ?>
		</header>
		<!--include header end-->
	</header>
	<!-- [ Header ] end -->





	<!-- [ Main Content ] start -->


	<div class="pc-container">
		<div class="container-fluid rounded bg-white mt-1">
			<!-- [ breadcrumb ] start -->
			<div class="page-header">
				<div class="page-block">
					<div class="row align-items-center">
						<div class="col-md-12">
							<div class="page-header-title">
								<h5 class="m-b-10">Register New Customer</h5>
							</div>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html">Home</a></li>
								<li class="breadcrumb-item">Register Customer</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- [ breadcrumb ] end -->
			<div class="row">
				<div class="col">

					<div class="card" style="min-height:400px;">
						<div class="card-body">
							<center>
								<h2>Movie Registration</h2>
							</center>

							<form class="row g-3 " action="process_registration_movie.php" name="contactForm" onsubmit="return validateForm()" method="POST" enctype="multipart/form-data">



								<div class="col-md-3 text-center">
									<div class="profile-img">
										<img src="assets/images/user/movie.png" class="picture-src" id="uploadPreview" width="200px">

										<div class="file btn btn-lg btn-primary" style="width: 80%;">
											Change Photo
											<input id="fileToUpload" name="fileToUpload" type="file" class="upload  col-md-12" onchange="uploadPicture();" />

										</div>
									</div>
									<p id="pictureParagraph"></p>
									<input type="hidden" id="pictureName" name="pictureName" />
								</div>


								<div class="col-md-9 border-right">
									<div class="row">
										<div class="col-md-6 col-sm-12">
											<label for="title" class="form-label">Title</label>
											<div class="input-group">
												<span class="input-group-text"><i class="fa fa-video"></i></span>
												<input type="text" class="form-control" id="title" name="title" aria-describedby="inputGroupPrepend" placeholder="Movie title" onkeyup="validateTitle()">
												<span class="input-group-text iconParent"><i class="fa fa-star" id="titleIcon"></i></span>
											</div>
											<div class="error" id="titleErr"></div>
										</div>

										<div class="col-md-6 col-sm-12">
											<label for="genre" class="form-label">Genre</label>
											<div class="input-group">
												<span class="input-group-text"><i class="fa fa-video"></i></span>
												<input type="text" class="form-control" id="genre" name="genre" aria-describedby="inputGroupPrepend" placeholder="Genre" onkeyup="validateGenre()">
												<span class="input-group-text iconParent"><i class="fa fa-star" id="genreIcon"></i></span>
											</div>
											<div class="error" id="genreErr"></div>
										</div>

										<div class="col-md-6 col-sm-12">
											<label for="director" class="form-label">Director</label>
											<div class="input-group">
												<span class="input-group-text"><i class="fa fa-video"></i></span>
												<input type="text" class="form-control" id="director" name="director" aria-describedby="inputGroupPrepend" placeholder="Director" onkeyup="validateDirector()">
												<span class="input-group-text iconParent"><i class="fa fa-star" id="directorIcon"></i></span>
											</div>
											<div class="error" id="directorErr"></div>
										</div>

										<div class="col-md-6 col-sm-12">
											<label for="language" class="form-label">Language</label>
											<div class="input-group">
												<span class="input-group-text"><i class="fa fa-video"></i></span>
												<input type="text" class="form-control" id="language" name="language" aria-describedby="inputGroupPrepend" placeholder="Language" onkeyup="validateLanguage()">
												<span class="input-group-text iconParent"><i class="fa fa-star" id="languageIcon"></i></span>
											</div>
											<div class="error" id="languageErr"></div>
										</div>


									</div>
								</div>

								<div class="row">
									<button type="submit" class="btn btn-outline-primary mt-3" onclick="validateForm();">
										Submit&nbsp;&nbsp;
										<i class="fa fa-paper-plane" aria-hidden="true"></i>
									</button>

								</div>
							</form>
						</div>
						<!-- [ Footer ] start -->
						<div class="container-fluid rounded bg-blue-100 mt-1">
							<!--include footer start-->
							<?php require("footer.php"); ?>
							<!--include footer end-->
						</div>
						<!-- [ Footer ] end -->
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

<script>
	// Defining a function to display error message
	function printError(elemId, hintMsg) {
		document.getElementById(elemId).innerHTML = hintMsg;
	}

	// Retrieving the values of form elements 
	var title = document.contactForm.title;
	var genre = document.contactForm.genre;
	var director = document.contactForm.director;
	var language = document.contactForm.language;
	var pictureName = document.getElementById("pictureName");

	// Defining error variables with a default value
	var titleErr = genreErr = directorErr = languageErr = true;

	function valid(el, iconID) {
		el.style.border = "1px solid green";
		var elIcon = document.getElementById(iconID);
		elIcon.parentNode.style.border = "1px solid green";
		elIcon.style.color = "green";
		elIcon.classList.remove("fa-star");
		elIcon.classList.remove("fa-exclamation-triangle");
		elIcon.classList.add("fa-check");
	}

	function inValid(el, iconID) {
		el.style.border = "1px solid red";
		var elIcon = document.getElementById(iconID);
		elIcon.parentNode.style.border = "1px solid red";
		elIcon.style.color = "red";
		elIcon.classList.remove("fa-star");
		elIcon.classList.remove("fa-check");
		elIcon.classList.add("fa-exclamation-triangle");
	}

	// Validate title
	function validateTitle() {

		if (title.value === "") {
			printError("titleErr", "Please enter your title");
			inValid(title, "titleIcon");

		} else {
			var regex = /^[A-Z][a-z]*/;
			if (regex.test(title.value) === false) {
				printError("titleErr", "Please enter a valid title");
				inValid(title, "titleIcon");
			} else {
				printError("titleErr", "");
				titleErr = false;
				valid(title, "titleIcon");
			}
		}
	}


	// Validate genre
	function validateGenre() {
		if (genre.value === "") {
			printError("genreErr", "Please enter your genre");
			inValid(genre, "genreIcon");
		} else {
			var regex = /^[A-Z][a-z]*/;
			if (regex.test(genre.value) === false) {
				printError("genreErr", "Please enter a valid genre");
				inValid(genre, "genreIcon");
			} else {
				printError("genreErr", "");
				genreErr = false;
				valid(genre, "genreIcon");
			}
		}
	}



	// Validate director 1
	function validateDirector() {

		if (director.value === "") {
			printError("directorErr", "Please enter your director");
			inValid(director, "directorIcon");
		} else {
			var regex = /^[A-Z][a-z]*/;
			if (regex.test(director.value) === false) {
				printError("directorErr", "Please enter a valid director");
				inValid(director, "directorIcon");
			} else {
				printError("directorErr", "");
				directorErr = false;
				valid(director, "directorIcon");
			}
		}
	}

	function validateLanguage() {

		if (language.value === "") {
			printError("languageErr", "Please enter your language");
			inValid(language, "languageIcon");
		} else {
			var regex = /^[A-Z][a-z]*/;
			if (regex.test(language.value) === false) {
				printError("languageErr", "Please enter a valid language");
				inValid(language, "languageIcon");
			} else {
				printError("languageErr", "");
				languageErr = false;
				valid(language, "languageIcon");
			}
		}
	}


	// Defining a function to validate form 
	function validateForm() {
		validateTitle();
		validateGenre();
		validateDirector();
		validateLanguage();

		// Prevent the form from being submitted if there are any errors
		if ((titleErr || genreErr || directorErr || languageErr) === true) {
			return false;
		} else {
			return true;
		}

	};
</script>

<script type="text/javascript">
	function uploadPicture() {
		var oFReader = new FileReader();
		oFReader.readAsDataURL(document.getElementById("fileToUpload").files[0]);

		oFReader.onload = function(oFREvent) {
			document.getElementById("uploadPreview").src = oFREvent.target.result;

			document.getElementById("pictureName").value = document.getElementById("fileToUpload").files[0].name;
			document.getElementById("pictureParagraph").innerHTML = document.getElementById("fileToUpload").files[0].name;
		};
	};
</script>

<style>
	.fileUpload {
		position: relative;
		overflow: hidden;
		margin: 10px;
	}

	.fileUpload input.upload {
		position: absolute;
		top: 0;
		right: 0;
		margin: 0;
		padding: 0;
		font-size: 20px;
		cursor: pointer;
		opacity: 0;
		filter: alpha(opacity=0);
	}

	.error {
		color: red;
		font-size: 90%;
	}

	input[type="submit"]:hover {
		background: #0165b6;
	}

	input[type=text],
	input[type=password],
	select {
		border-right: 0 !important;
	}

	.iconParent {
		background-color: white;
		border-left: 0 !important;
	}
</style>
<style>
	.emp-profile {
		padding: 3%;
		margin-top: 3%;
		margin-bottom: 3%;
		border-radius: 0.5rem;
		background: #fff;
	}

	.profile-img {
		text-align: center;
	}

	.profile-img img {
		width: 70%;
		height: 100%;
	}

	.profile-img .file {
		position: relative;
		overflow: hidden;
		margin-top: -20%;
		width: 70%;
		border: none;
		border-radius: 0;
		font-size: 15px;
		background: #212529b8;
	}

	.profile-img .file input {
		position: absolute;
		opacity: 0;
		right: 0;
		top: 0;
	}

	.profile-head h5 {
		color: #333;
	}

	.profile-head h6 {
		color: #0062cc;
	}

	.profile-edit-btn {
		border: none;
		border-radius: 1.5rem;
		width: 70%;
		padding: 2%;
		font-weight: 600;
		color: #6c757d;
		cursor: pointer;
	}
</style>

</html>
