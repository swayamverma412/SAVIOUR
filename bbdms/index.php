
<?php
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>SAVIOUR | Home Page</title>
	
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<!-- //Web-Fonts -->

</head>

<body>
	<?php include('includes/header.php');?>

	<!-- banner -->
	<div class="slider">
		<div class="callbacks_container">
			<ul class="rslides callbacks callbacks1" id="slider4">
				<li>
					<div class="banner-top1">
						<div class="banner-info_agile_w3ls">
							<div class="container">
								<h3>Blood bank services that you
									<span>can trust</span>
								</h3>
								
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="banner-top2">
						<div class="banner-info_agile_w3ls">
							<div class="container">
								<h3>One Blood Donation Save three Lives
									<span>every day</span>
								</h3>
						
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- //banner -->
	<div class="clearfix"></div>

	<!-- banner bottom -->
	

	<div class="screen-w3ls py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="w3ls-titles text-center mb-5">
				<h3 class="title">BLOOD GROUPS</h3>
				<span>
					<i class="fas fa-user-md"></i>
				</span>
				<p class="mt-2">blood group of any human being will mainly fall in any one of the following groups..</p>
			</div>
			<div class="row">
            <div class="col-lg-6 text-center">

				<p>
					
  The most widely recognized blood group system is the ABO system, which classifies blood into four primary types: A, B, AB, and O. Type A blood has A antigens and anti-B antibodies, while Type B has B antigens and anti-A antibodies. Type AB possesses both A and B antigens without any anti-A or anti-B antibodies, and Type O has neither A nor B antigens but has both anti-A and anti-B antibodies, making it the universal donor. Another critical factor in blood typing is the Rh factor, denoted as either Rh-positive (+) or Rh-negative (-), based on the presence or absence of the Rh antigen. Blood group compatibility is essential for safe blood transfusions, organ transplants, and pregnancy planning. Knowledge of one's blood type is crucial for both medical care and ensuring the successful outcomes of these procedures. Beyond the ABO and Rh systems, various other blood group systems and antigens exist, with genetics playing a role in determining an individual's specific blood type. Understanding and matching blood types accurately are paramount in healthcare, as they impact the safety and success of medical interventions, especially transfusions and organ donations.

</p>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid rounded" src="images/img2.jpg" alt="">
            </div>
        </div>

        <div class="row mb-4">
        
            <div class="col-md-4" style="padding-top: 30px;"> 
                <a class="btn btn-lg btn-secondary btn-block login-button ml-lg-5 mt-lg-0 mt-4 mb-lg-0 mb-3" href="sign-up.php"> Become a Donor</a>
            </div>
        </div>
		</div>
	</div>
	<!-- //treatments -->

	<!-- footer -->
	<?php include('includes/footer.php');?>


	<!-- Js files -->
	<!-- JavaScript -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->

	<!-- banner slider -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: true,
				speed: 1000,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>
	<!-- //banner slider -->

	<!-- fixed navigation -->
	<script src="js/fixed-nav.js"></script>
	<!-- //fixed navigation -->

	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- move-top -->
	<script src="js/move-top.js"></script>
	<!-- easing -->
	<script src="js/easing.js"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="js/medic.js"></script>

	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- //Js files -->

</body>

</html>