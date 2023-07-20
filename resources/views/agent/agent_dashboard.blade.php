<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>SNTPROJECT</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">	
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets1/css/bootstrap.min.css')}}">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets1/css/style.css')}}">
<!-- Responsive-->
<link rel="stylesheet" href="{{ asset('backend/assets1/css/responsive.css')}}">
<!-- fevicon -->
<link rel="icon" href="{{ asset('backend/assets1/images/fevicon.png')}}" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="{{ asset('backend/assets1/css/jquery.mCustomScrollbar.min.css')}}">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets --> 
<link rel="stylesheet" href="{{ asset('backend/assets1/css/owl.carousel.min.css')}}">
<link rel="stylesoeet" href="{{ asset('backend/assets1/css/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >


</head>
<body>

	<!-- header section start-->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- <a class="logo" href="#"><img src="images/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button> -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                   <a class="nav-link" href="\">HOME</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="search jobs.html">SEARCH JOBS</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="recurments.html">RECRUITERS</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="companies.html">COMPANIES</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="services.html">SERVICES</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="#">MORE</a>
                </li>
            </ul>
        </div>
         <div class="logout_text"><a href="{{ route('profile.logout')}}">LOG OUT</a></div>
    </nav>
  <!-- header section end-->
  <div class="services_section">
    <div class="container">
      <h1 class="services_text">SERVICES</h1>
    </div>
  </div>
  <div class="services_section_2 layout_padding">
    <div class="container">
      <h1 class="companies_text">Find Any Kind Job</h1>
      <div class="services_item ">
        <div class="row">
          <div class="col-sm-6 col-lg-3">
            <div class="services_1"><img src="images/img-1.png"></div>
            <h1 class="jobs_main">Industrial jobs</h1>
            <p class="many_main">There are many variations of passages of Lorem Ipsum available,</p>
            <div class="join_bt">
              <div class="join_text"><a href="#">JOIN US</a></div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="services_1"><img src="images/img-2.png"></div>
            <h1 class="jobs_main">Corporate jobs</h1>
            <p class="many_main">There are many variations of passages of Lorem Ipsum available,</p>
            <div class="join_bt">
              <div class="join_text"><a href="#">JOIN US</a></div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="services_1"><img src="images/img-3.png"></div>
            <h1 class="jobs_main">Marketing jobs</h1>
            <p class="many_main">There are many variations of passages of Lorem Ipsum available,</p>
            <div class="join_bt">
              <div class="join_text"><a href="#">JOIN US</a></div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="services_1"><img src="images/img-4.png"></div>
            <h1 class="jobs_main">Government jobs</h1>
            <p class="many_main">There are many variations of passages of Lorem Ipsum available,</p>
            <div class="join_bt">
              <div class="join_text"><a href="#">JOIN US</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- footer section start-->
  <div class="footer_section layout_padding">
    <div class="container">
      <h1 class="subscribr_text">Subscribe Now</h1>
      <p class="lorem_text">There are many variations of passages of Lorem Ipsum available, but the majority have </p>
      <div class="box_main_2">
          <textarea type="" class="email_bt_2" placeholder="Enter Your Email" name=""></textarea>
        </div>
        <button class="subscribe_bt_2"><a href="#">Subscribe</a></button>
    </div>
  </div>
  <!-- footer section end-->
    	<!-- copyright section start-->
        <div class="copyright_section">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
				<p class="text-muted mb-1 mb-md-0">Copyright © 2022 <a href="https://www.sntproject.com" target="_blank">SNTProject</a>.</p>
				</div>
				<div class="col-md-6">
					<p class="cookies_text">Cookies, Privacy and Terms</p>
				</div>
			</div>
		</div>
	</div>
	<!-- copyright section end-->


    <!-- Javascript files-->
    <script src="{{ asset('backend/assets1/js/jquery.min.js')}}"></script>
    <script src="{{ asset('backend/assets1/js/popper.min.js')}}"></script>
    <script src="{{ asset('backend/assets1/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{ asset('backend/assets1/js/jquery-3.0.0.min.js')}}"></script>
      <script src="{{ asset('backend/assets1/js/plugin.js')}}"></script>
      <!-- sidebar -->
      <script src="{{ asset('backend/assets1/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="{{ asset('backend/assets1/js/custom.js')}}"></script>
      <!-- javascript --> 
      <script src="{{ asset('backend/assets1/css/style.css')}}js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        <script>
            @if(Session::has('message'))
            var type = "{{ Session::get('alert-type','info') }}"
            switch(type){
                case 'info':
                toastr.info(" {{ Session::get('message') }} ");
                break;

                case 'success':
                toastr.success(" {{ Session::get('message') }} ");
                break;

                case 'warning':
                toastr.warning(" {{ Session::get('message') }} ");
                break;

                case 'error':
                toastr.error(" {{ Session::get('message') }} ");
                break; 
            }
            @endif 
        </script>

      <script>
      $(document).ready(function(){
      $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });

		});
         </script>


     
</body>
</html>