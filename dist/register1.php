<!DOCTYPE html>
<html lang="en">

<head>
    <title>DashboardKit Bootstrap 5 Admin Template</title>
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
            <img src="assets/images/logo.svg" alt="" class="logo logo-lg">
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
    <?php require("navigation_menu.html"); ?>
    <!-- [ navigation menu ] end -->


    <!-- [ Header ] start -->
    <header class="pc-header ">
        <!--include header start-->
    <?php require("header.html"); ?>		
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
                                <h5 class="m-b-10">Sample Page</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item">Sample Page</li>
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
                        <div class="card-header">
                            <h5>Regsitration Form</h5>
                        </div>
                        <div class="card-body">
                            <center>
                                <h2>Application Form</h2>
                            </center>

                            <form class="row g-3 " action="#" name="contactForm" onsubmit="return validateForm()" method="post">



                                <div class="col-md-3 text-center">
                                    <div class="profile-img">
                                        <img src="assets/images/user/profile.jpg" class="picture-src" id="uploadPreview" width="200px">

                                        <div class="file btn btn-lg btn-primary" style="width: 80%;">
                                            Change Photo
                                            <input id="uploadBtn" type="file" class="upload  col-md-12" onchange="uploadPicture();" />

                                        </div>
                                    </div>
                                    <input class="col-12" id="pictureName" placeholder="File Name here" disabled="disabled" style="width:80%;" />
                                </div>


                                <div class="col-md-9 border-right">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <label for="firstName" class="form-label">First Name</label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i  class="fa fa-lg fa-user" ></i></span>
                                                <input type="text" class="form-control" id="firstName" name="firstName" aria-describedby="inputGroupPrepend" placeholder="First Name" onkeyup="validateFirstName()">
                                                <span class="input-group-text iconParent"><i class="fa fa-star" id="firstNameIcon"></i></span>
                                            </div>
                                            <div class="error" id="firstNameErr"></div>
                                        </div>

                                        <div class="col-md-6 col-sm-12">
                                            <label for="lastName" class="form-label">Last Name</label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                                                <input type="text" class="form-control" id="lastName" name="lastName" aria-describedby="inputGroupPrepend" placeholder="Last Name" onkeyup="validateLastName()">
                                                <span class="input-group-text iconParent"><i  class="fa fa-star" id="lastNameIcon" ></i></span>
                                            </div>
                                            <div class="error" id="lastNameErr"></div>
                                        </div>

                                        <div class="col-md-6 col-sm-12">
                                            <label for="address1" class="form-label">Address 1</label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="bi bi-house"></i></span>
                                                <input type="text" class="form-control" id="address1" name="address1" aria-describedby="inputGroupPrepend" placeholder="Address" onkeyup="validateAddress1()">
                                                <span class="input-group-text iconParent"><i  class="fa fa-star" id="address1Icon" ></i></span>
                                            </div>
                                            <div class="error" id="address1Err"></div>
                                        </div>


                                        <div class="col-md-6 col-sm-12">
                                            <label for="address2" class="form-label">Address 2</label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="fa fa-building"></i></span>
                                                <input type="text" class="form-control" id="address2" name="address2" aria-describedby="inputGroupPrepend" placeholder="Address 2 (Optional)" onkeyup="validateAddress2()">
                                                <span class="input-group-text iconParent"><i  class="fa fa-check" id="address2Icon" ></i></span>
                                            </div>
                                            <div class="error" id="address2Err"></div>
                                        </div>



                                        <div class="col-md-4 col-sm-12">
                                            <label for="cityTown" class="form-label">City/Town</label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="fa fa-city"></i></span>
                                                <input type="text" class="form-control" id="cityTown" name="cityTown" aria-describedby="inputGroupPrepend" placeholder="City/Town" onkeyup="validateCity()">
                                                <span class="input-group-text iconParent"><i  class="fa fa-star" id="cityIcon" ></i></span>
                                            </div>
                                            <div class="error" id="cityTownErr"></div>
                                        </div>

                                        <div class="col-md-4 col-sm-12">
                                            <label for="state" class="form-label">State</label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="fa fa-flag"></i></span>
                                                <select name="state" id="state" class="form-control" onchange="validateState()">
                        <option value=""></option>
                        <option>Alabama</option>
                        <option>Alaska</option>
                        <option>Arizona</option>
                        <option>Arkansas</option>
                        <option>California</option>
                        <option>Colorado</option>
                        <option>Connecticut</option>
                        <option>Delaware</option>
                        <option>District of Columbia</option>
                        <option>Florida</option>
                        <option>Georgia</option>
                        <option>Hawaii</option>
                        <option>Idaho</option>
                        <option>Illinois</option>
                        <option>Indiana</option>
                        <option>Iowa</option>
                        <option>Kansas</option>
                        <option>Kentucky</option>
                        <option>Louisiana</option>
                        <option>Maine</option>
                        <option>Maryland</option>
                        <option>Mass.</option>
                        <option>Michigan</option>
                        <option>Minnesota</option>
                        <option>Mississippi</option>
                        <option>Missouri</option>
                        <option>Montana</option>
                        <option>Nebraska</option>
                        <option>Nevada</option>
                        <option>New Hampshire</option>
                        <option>New Jersey</option>
                        <option>New Mexico</option>
                        <option>New York</option>
                        <option>North Carolina</option>
                        <option>North Dakota</option>
                        <option>Ohio</option>
                        <option>Oklahoma</option>
                        <option>Oregon</option>
                        <option>Pennsylvania</option>
                        <option>Rhode Island</option>
                        <option>South Carolina</option>
                        <option>South Dakota</option>
                        <option>Tennessee</option>
                        <option>Texas</option>
                        <option>Utah</option>
                        <option>Vermont</option>
                        <option>Virginia</option>
                        <option>Washington</option>
                        <option>West Virginia</option>
                        <option>Wisconsin</option>
                        <option>Wyoming</option>
                    </select>
                                                <span class="input-group-text iconParent"><i  class="fa fa-star" id="stateIcon" ></i></span>
                                            </div>
                                            <div class="error" id="stateErr"></div>
                                        </div>

                                        <div class="col-md-4 col-sm-12">
                                            <label for="zip" class="form-label">Zip</label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="far fa-building"></i></span>
                                                <input type="text" class="form-control" id="zip" name="zip" aria-describedby="inputGroupPrepend" placeholder="Zip" onkeyup="validateZip()">
                                                <span class="input-group-text iconParent"><i  class="fa fa-star" id="zipIcon" ></i></span>
                                            </div>
                                            <div class="error" id="zipErr"></div>
                                        </div>

                                    </div>
                                </div>
                                <hr>
                                <div class="col-md-6 mt-0">
                                    <label for="phoneNumber" class="form-label">Phone Number</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fa fa-phone-square"></i></span>
                                        <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" aria-describedby="inputGroupPrepend" placeholder="Phone Number" onkeyup="validatePhoneNumber()">
                                        <span class="input-group-text iconParent"><i  class="fa fa-star" id="phoneNumberIcon"  ></i></span>
                                    </div>
                                    <div class="error" id="phoneNumberErr"></div>
                                </div>

                                <div class="col-md-6 mt-0">
                                    <label for="mobilePhone" class="form-label">Mobile Phone</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fa fa-mobile-phone"></i></span>
                                        <input type="text" class="form-control" id="mobilePhone" name="mobilePhone" aria-describedby="inputGroupPrepend" placeholder="Mobile Phone" onkeyup="validateMobilePhone()">
                                        <span class="input-group-text iconParent"><i  class="fa fa-star" id="mobilePhoneIcon" ></i></span>
                                    </div>
                                    <div class="error" id="mobilePhoneErr"></div>
                                </div>


                                <div class="col-md-4 mt-2">
                                    <label for="emailAddress" class="form-label">Email Address</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" id="emailAddress" name="emailAddress" aria-describedby="inputGroupPrepend" placeholder="Email Address" onkeyup="validateEmailAddress()">
                                        <span class="input-group-text iconParent"><i  class="fa fa-star" id="emailAddressIcon" ></i></span>
                                    </div>
                                    <div class="error" id="emailAddressErr"></div>
                                </div>


                                <div class="col-md-4 mt-2">
                                    <label for="password" class="form-label">Password</label>
                                    <div class="input-group">

                                        <div class="input-group bg-light" id="show_hide_password">
                                            <span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
                                            <input type="password" class="form-control" id="password" name="password" aria-describedby="inputGroupPrepend" placeholder="Password" onkeyup="validatePassword();">
                                            <div class="input-group-text iconParent">
                                                <div class="fa fa-star" id="passwordIcon">
                                                </div>
                                            </div>
                                            <span class="input-group-text">
                            <a href=""><i class="fa fa-lg fa-eye" style="padding-left: 10px; padding-right: 10px;" aria-hidden="true"></i></a>
                        </span>
                                        </div>
                                    </div>
                                    <small>At least eight characters in length, with at least one numeric digit and a special character.</small>
                                    <div class="error" id="passwordErr"></div>
                                </div>


                                <div class="col-md-4 mt-2">
                                    <label for="confirmPassword" class="form-label">Confirm Password</label>
                                    <div class="input-group">

                                        <div class="input-group bg-light" id="show_hide_confirm_password">
                                            <span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
                                            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" aria-describedby="inputGroupPrepend" placeholder="Confirm Password" onkeyup="validateConfirmPassword()">

                                            <span class="input-group-text iconParent"><div  class="fa fa-star" id="confirmPasswordIcon" ></div></span>
                                            <span class="input-group-text">
                            <a href=""><i class="fa fa-lg fa-eye" style=" padding-left: 10px; padding-right: 10px;" aria-hidden="true"></i></a>
                        </span>
                                        </div>
                                    </div>
                                    <div class="error" id="confirmPasswordErr"></div>
                                </div>



                                <div class="row mt-1">
                                    <label>Certify that you are over 18 years</label>
                                    <div class="form-inline">
                                        <label><input type="checkbox" value="agree" id="over18"> I certify that I am 18 years of age or older.</label>
                                        <div class="error" id="over18Err"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <button type="button" class="btn btn-outline-primary mt-3" onclick="validateForm();">
                    Submit&nbsp;&nbsp; 
                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                </button>

                                </div>
                            </form>
                        
                        </div>

                    </div>
                        <!-- [ Footer ] start -->
                        <div class="container-fluid rounded bg-blue-100 mt-1">
                            <!--include footer start-->
							    <?php require("footer.html"); ?>
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

    <script>
        (function documentReady() {

        })();
    </script>
<script>
    (function documentReady() {


        $("#show_hide_password a").on('click', function(event) {
            event.preventDefault();
            if ($('#show_hide_password input').attr("type") == "text") {
                $('#show_hide_password input').attr('type', 'password');
                $('#show_hide_password i').addClass("fa-eye-slash");
                $('#show_hide_password i').removeClass("fa-eye");
            } else if ($('#show_hide_password input').attr("type") == "password") {
                $('#show_hide_password input').attr('type', 'text');
                $('#show_hide_password i').removeClass("fa-eye-slash");
                $('#show_hide_password i').addClass("fa-eye");
            }
        });




        $("#show_hide_confirm_password a").on('click', function(event) {
            event.preventDefault();
            if ($('#show_hide_confirm_password input').attr("type") == "text") {
                $('#show_hide_confirm_password input').attr('type', 'password');
                $('#show_hide_confirm_password i').addClass("fa-eye-slash");
                $('#show_hide_confirm_password i').removeClass("fa-eye");
            } else if ($('#show_hide_confirm_password input').attr("type") == "password") {
                $('#show_hide_confirm_password input').attr('type', 'text');
                $('#show_hide_confirm_password i').removeClass("fa-eye-slash");
                $('#show_hide_confirm_password i').addClass("fa-eye");
            }
        });





    })();
</script>
<script>
    // Defining a function to display error message
    function printError(elemId, hintMsg) {
        document.getElementById(elemId).innerHTML = hintMsg;
    }

    // Retrieving the values of form elements 
    var firstName = document.contactForm.firstName;
    var lastName = document.contactForm.lastName;
    var address1 = document.contactForm.address1;
    var address2 = document.contactForm.address2;
    var cityTown = document.contactForm.cityTown;
    var state = document.contactForm.state;
    var zip = document.contactForm.zip;
    var phoneNumber = document.contactForm.phoneNumber;
    var mobilePhone = document.contactForm.mobilePhone;
    var emailAddress = document.contactForm.emailAddress;
    var password = document.contactForm.password;
    var confirmPassword = document.contactForm.confirmPassword;
    var over18 = document.contactForm.over18;
    var pictureName = document.getElementById("pictureName");

    // Defining error variables with a default value
    var firstNameErr = lastNameErr = address1Err = address2Err = cityTownErr = stateErr = zipErr =
        phoneNumberErr = mobilePhoneErr = emailAddressErr = passwordErr = confirmPasswordErr = over18Err = true;

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

    // Validate first name
    function validateFirstName() {

        if (firstName.value == "") {
            printError("firstNameErr", "Please enter your first name");
            inValid(firstName, "firstNameIcon");

        } else {
            var regex = /^[A-Z][a-z]*/;
            if (regex.test(firstName.value) === false) {
                printError("firstNameErr", "Please enter a valid first name");
                inValid(firstName, "firstNameIcon");
            } else {
                printError("firstNameErr", "");
                firstNameErr = false;
                valid(firstName, "firstNameIcon");
            }
        }
    }


    // Validate last name
    function validateLastName() {
        if (lastName.value == "") {
            printError("lastNameErr", "Please enter your last name");
            inValid(lastName, "lastNameIcon");
        } else {
            var regex = /^[A-Z][a-z]*/;
            if (regex.test(lastName.value) === false) {
                printError("lastNameErr", "Please enter a valid last name");
                inValid(lastName, "lastNameIcon");
            } else {
                printError("lastNameErr", "");
                lastNameErr = false;
                valid(lastName, "lastNameIcon");
            }
        }
    }



    // Validate address 1
    function validateAddress1() {
        if (address1.value == "") {
            address1Err = true;
            inValid(address1, "address1Icon");
            printError("address1Err", "Please enter address1");
        } else if (address1.value != "") {
            // Regular expression for basic address1 validation
            var regex = /[a-zA-Z0-9\s]+$/;
            var regex2 = /\bP(ost|ostal)?([ \.]*(O|0)(ffice)?)?([ \.]*Box)?\b/i;
            if (regex.test(address1.value) === false) {
                printError("address1Err", "Please enter a valid address1");
                inValid(address1, "address1Icon");
            } else if (regex2.test(address1.value)) {
                printError("address1Err", "Address can not be P.O. Box");
                inValid(address1, "address1Icon");
            } else {
                printError("address1Err", "");
                address1Err = false;
                valid(address1, "address1Icon");
            }
        }
    }

    // Validate Address 2
    function validateAddress2() {
        if (address2.value == "") {
            printError("address2Err", "");
            address2Err = false;
            valid(address2, "address2Icon");
        } else if (address2.value != "") {
            // Regular expression for basic address2 validation
            var regex = /[a-zA-Z0-9\s]+$/;
            var regex2 = /\bP(ost|ostal)?([ \.]*(O|0)(ffice)?)?([ \.]*Box)?\b/i;
            if (regex.test(address2.value) === false) {
                printError("address2Err", "Please enter a valid address2");
                inValid(address2, "address2Icon");
            } else if (regex2.test(address2.value)) {
                printError("address2Err", "Address can not be P.O. Box");
                inValid(address2, "address2Icon");
            } else {
                printError("address2Err", "");
                address2Err = false;
                valid(address2, "address2Icon");
            }
        }
    }


    function validateCity() {
        // Validate city/town
        if (cityTown.value == "") {
            printError("cityTownErr", "Please enter your city/town");
            inValid(cityTown, "cityIcon");
        } else {
            // Regular expression for basic address validation
            var regex = /^[A-Z][a-z]*/; // ex: Farmingdale
            var regex2 = /^[A-Z][a-z]*\s[A-Z][a-z]*/; // ex: New York

            if ((regex.test(cityTown.value) || regex2.test(cityTown.value)) === false) {
                printError("cityTownErr", "Please enter a valid city/town");
                inValid(cityTown, "cityIcon");
            } else {
                printError("cityTownErr", "");
                cityTownErr = false;
                valid(cityTown, "cityIcon");
            }
        }
    }

    // Validate state
    function validateState() {
        // Validate state
        if (state.value == "") {
            printError("stateErr", "Please select your state");
            inValid(state, "stateIcon");
        } else {
            printError("stateErr", "");
            stateErr = false;
            valid(state, "stateIcon");
        }
    }

    // Validate zip
    function validateZip() {
        if (zip.value == "") {
            printError("zipErr", "Please enter your zip");
            inValid(zip, "zipIcon");
        } else {
            var regex = /^\d{5}$|^\d{5}-\d{4}$/; // ex: 38980 and 83900-8789               
            if (regex.test(zip.value) === false) {
                printError("zipErr", "Please enter a valid zip");
                inValid(zip, "zipIcon");
            } else {
                printError("zipErr", "");
                zipErr = false;
                valid(zip, "zipIcon");
            }
        }
    }

    // Validate phone number
    function validatePhoneNumber() {
        if (phoneNumber.value == "") {
            printError("phoneNumberErr", "Please enter your phone number");
            inValid(phoneNumber, "phoneNumberIcon");
        } else {
            var regex = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
            if (regex.test(phoneNumber.value) === false) {
                printError("phoneNumberErr", "Please enter a valid 10 digit phone number");
                inValid(phoneNumber, "phoneNumberIcon");
            } else {
                printError("phoneNumberErr", "");
                phoneNumberErr = false;
                valid(phoneNumber, "phoneNumberIcon");
            }
        }
    }

    // Validate mobile number
    function validateMobilePhone() {
        if (mobilePhone.value == "") {
            printError("mobilePhoneErr", "Please enter your mobile number");
            inValid(mobilePhone, "mobilePhoneIcon");
        } else {
            var regex = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
            if (regex.test(mobilePhone.value) === false) {
                printError("mobilePhoneErr", "Please enter a valid 10 digit mobile number");
                inValid(mobilePhone, "mobilePhoneIcon");
            } else {
                printError("mobilePhoneErr", "");
                mobilePhoneErr = false;
                valid(mobilePhone, "mobilePhoneIcon");
            }
        }

    }

    // Validate email address
    function validateEmailAddress() {
        if (emailAddress.value == "") {
            printError("emailAddressErr", "Please enter your email address");
            inValid(emailAddress, "emailAddressIcon");
        } else {

            // Regular expression for basic email validation
            var regex = /^\S+@\S+\.\S+$/;
            if (regex.test(emailAddress.value) === false) {
                printError("emailAddressErr", "Please enter a valid email address");
                inValid(emailAddress, "emailAddressIcon");
            } else {
                printError("emailAddressErr", "");
                emailAddressErr = false;
                valid(emailAddress, "emailAddressIcon");
            }
        }
    }

    // Validate password
    function validatePassword() {
        if (password.value == "") {
            printError("passwordErr", "Please enter your password");
            inValid(password, "passwordIcon");
        } else {
            if (password.value.length < 8) {
                printError("passwordErr", "Password Length should be greater than 8 characters.");
                inValid(password, "passwordIcon");
            } else if (password.value.length > 15) {
                printError("passwordErr", "Password Length should be less than or equal 15 characters.");
                inValid(password, "passwordIcon");
            } else if (/(?=.*[0-9])/.test(password.value) === false) {
                printError("passwordErr", "Password must contain a number.");
                inValid(password, "passwordIcon");
            } else
            if (/(?=.*[a-z])/.test(password.value) === false) {
                printError("passwordErr", "Password must contain a lower case letter.");
                inValid(password, "passwordIcon");
            } else
            if (/(?=.*[A-Z])/.test(password.value) === false) {
                printError("passwordErr", "Password must contain an upper case letter.");
                inValid(password, "passwordIcon");
            } else
            if (/(?=.*[!@#$%^&*()_,.?:{}|<>])/.test(password.value) === false) {
                printError("passwordErr", "Password must contain a special character.");
                inValid(password, "passwordIcon");
            } else {
                printError("passwordErr", "");
                passwordErr = false;
                valid(password, "passwordIcon");
            }
        }
    }

    function validateConfirmPassword() {
        // Confirm password
        if (confirmPassword.value == "") {
            printError("confirmPasswordErr", "Please confirm your password");
            inValid(confirmPassword, "confirmPasswordIcon");
        } else {
            if (confirmPassword.value != password.value) {
                printError("confirmPasswordErr", "Password does not match.");
                inValid(confirmPassword, "confirmPasswordIcon");
            } else {
                printError("confirmPasswordErr", "");
                confirmPasswordErr = false;
                valid(confirmPassword, "confirmPasswordIcon");
            }
        }
    }



    // Defining a function to validate form 
    function validateForm() {
        validateFirstName();
        validateLastName();
        validateAddress1();
        validateAddress2();
        validateCity();
        validateState();
        validateZip();
        validatePhoneNumber();
        validateMobilePhone();
        validateEmailAddress();
        validatePassword();
        validateConfirmPassword();

        if (!over18.checked) {
            printError("over18Err", "You must certify that you are over 18 years old.");
            return false;
        } else {
            printError("over18Err", "");
            over18Err = false;
        }


        // Prevent the form from being submitted if there are any errors
        if ((firstNameErr || lastNameErr || address1Err || address2Err || cityTownErr || stateErr ||
                zipErr || phoneNumberErr || mobilePhoneErr || emailAddressErr || passwordErr || confirmPasswordErr || over18Err) == true) {
            return false;
        } else {

            return true;
        }

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

<script type="text/javascript">
    function uploadPicture() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadBtn").files[0]);

        oFReader.onload = function(oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;

            document.getElementById("pictureName").value = document.getElementById("uploadBtn").files[0].name;

        };
    };
</script>
</body>

</html>