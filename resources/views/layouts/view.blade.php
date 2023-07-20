<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fables">
    <meta name="author" content="Enterprise Development">
    <link rel="shortcut icon" href="assets/custom/images/shortcut.png">

    <title> SNT Project </title>
    
    <!-- animate.css-->  
    <link href="{{ asset('backend/assets1/vendor/animate.css-master/animate.min.css')}}" rel="stylesheet">
    <!-- Load Screen -->
    <link href="{{ asset('backend/assets1/vendor/loadscreen/css/spinkit.css')}}" rel="stylesheet">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <!-- Font Awesome 5 -->
    <link href="{{ asset('backend/assets1/vendor/fontawesome/css/fontawesome-all.min.css')}}" rel="stylesheet">
    <!-- Fables Icons -->
    <link href="{{ asset('backend/assets1/custom/css/fables-icons.css')}}" rel="stylesheet"> 
    <!-- Bootstrap CSS --> 
    <link href="{{ asset('backend/assets1/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('backend/assets1/vendor/bootstrap/css/bootstrap-4-navbar.css')}}" rel="stylesheet">
    <!-- portfolio filter gallery -->
    <link href="{{ asset('backend/assets1/vendor/portfolio-filter-gallery/portfolio-filter-gallery.css')}}" rel="stylesheet">
    <!-- Video Background -->
    <link href="{{ asset('backend/assets1/vendor/video-background/video-background.css')}}" rel="stylesheet"> 
    <!-- FANCY BOX -->
    <link href="{{ asset('backend/assets1/vendor/fancybox-master/jquery.fancybox.min.css')}}" rel="stylesheet"> 
    <!-- RANGE SLIDER -->
    <link href="{{ asset('backend/assets1/vendor/range-slider/range-slider.css')}}" rel="stylesheet">
    <!-- OWL CAROUSEL  --> 
    <link href="{{ asset('backend/assets1/vendor/owlcarousel/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{ asset('backend/assets1/vendor/owlcarousel/owl.theme.default.min.css')}}" rel="stylesheet">
    <!-- FABLES CUSTOM CSS FILE -->
    <link href="{{ asset('backend/assets1/custom/css/custom.css')}}" rel="stylesheet">
    <!-- FABLES CUSTOM CSS RESPONSIVE FILE -->
    <link href="{{ asset('backend/assets1/vendor/loadscreen/css/spinkit.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
    
    <style type="text/css">
        .logo h3 {
    color: #00FFFF;
    font-family: 'Oswald', sans-serif;
    font-weight: 300;
    font-size: 23px;
    line-height:1.3;
    }

    .logo p {
        font-size: 6px;
        letter-spacing: 7px;
        text-transform: uppercase;
        background: #34495e;
        font-weight: 400;
        color: #fff;
        padding-left: 5px;
    }
    </style>
  
    
     
</head>


<body>

<div class="search-section">
    <a class="close-search" href="#"></a>
    <div class="d-flex justify-content-center align-items-center h-100">
        <form method="post" action="#" class="w-50">
            <div class="row">
                <div class="col-10">
                    <input type="search" value="" class="form-control palce bg-transparent border-0 search-input" placeholder="Search Here ..." /> 
                </div>
                <div class="col-2 mt-3">
                     <button type="submit" class="btn bg-transparent text-white"> <i class="fas fa-search"></i> </button>
                </div>
            </div>
        </form>
    </div>
         
</div>
    
<!-- Loading Screen -->
<div id="ju-loading-screen">
  <div class="sk-double-bounce">
    <div class="sk-child sk-double-bounce1"></div>
    <div class="sk-child sk-double-bounce2"></div>
  </div>
</div>
    
<!-- Start Top Header -->
<div class="fables-forth-background-color fables-top-header-signin">
    <div class="container">
        <div class="row" id="top-row">
            <div class="col-12 col-sm-2 col-lg-5">
                
            </div>
            <div class="col-12 col-sm-5 col-lg-4 text-right">
                <p class="fables-third-text-color font-13"><span class="fables-iconphone"></span> Phone :  (888) 6000 6000 - (888) 6000 6000</p>
            </div>
            <div class="col-12 col-sm-5 col-lg-3 text-right">
                <p class="fables-third-text-color font-13"><span class="fables-iconemail"></span> Email: sainawarattun123@gmail.com</p>
            </div>
            
        </div>
    </div>
</div>
 
<!-- /End Top Header -->

<!-- Start Fables Navigation -->
<div class="fables-navigation fables-main-background-color py-3 py-lg-0">
    <div class="container">
               <div class="row">
                   <div class="col-12 col-md-10 col-lg-9 pr-md-0">                       
                       <nav class="navbar navbar-expand-md btco-hover-menu py-lg-2">
         
                            <div class="logo-holder logo">
                                <a href="/">
                                <h3>SNT Project</h3>
                                <p>Rental & Sales service</p>
                                </a>
                            </div>
                            <div class="collapse navbar-collapse" id="fablesNavDropdown"> 

                                <ul class="navbar-nav mx-auto fables-nav">   
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="/"  aria-haspopup="true" aria-expanded="false">
                                            Home
                                        </a>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="#" id="sub-nav2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            service
                                        </a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="sub-nav3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Property
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="sub-nav3">
                                            <li><a class="dropdown-item" href="about1.html">Condos</a></li>
                                            <li><a class="dropdown-item" href="about2.html">Appartment</a></li>
                                            <li><a class="dropdown-item" href="about3.html">Office</a></li> 
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="#" id="sub-nav6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            About
                                        </a>
                                    </li> 
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="#" id="sub-nav7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Contact Us
                                        </a>
                                    </li>  
                                </ul> 

                    </div>
                </nav>
                   </div>
                   <div class="col-12 col-md-2 col-lg-3 pr-md-0 icons-header-mobile">
                         <a href="{{ route('register') }}" class="fables-third-text-color dropdown-toggle right px-3 px-md-2 px-lg-4 fables-second-hover-color top-header-link max-line-height position-relative">
                            <span class="fables-iconuser-register"></span>
                            Register
                        </a>
                         <a href="{{ route('login') }}" class="fables-third-text-color fables-second-hover-color font-13 top-header-link px-3 px-md-2 px-lg-4 max-line-height">
                            <span class="fables-iconuser"></span>
                            Login
                        </a>
                         
                         
                         
                    </div>
                   </div>
               </div>
    </div>
</div> 
	<!-- header section start-->

        @yield ('view')

  <!-- Footer section start -->
        <div class="fables-footer-image fables-after-overlay white-color py-4 py-lg-5 bg-rules">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 mt-2 mb-5 text-center">
                <h2 class="font-30 semi-font mb-5">Newsletter</h2>
                <form class="form-inline position-relative"> 
                  <div class="form-group fables-subscribe-formgroup"> 
                    <input type="email" class="form-control fables-subscribe-input fables-btn-rouned" placeholder="Your Email">
                  </div>
                  <button type="submit" class="btn fables-second-background-color fables-btn-rouned fables-subscribe-btn">Subscribe</button>
                </form>
                
            </div>
             
            <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                <h2 class="font-20 semi-font fables-second-border-color border-bottom pb-3">Contact us</h2>
               <div class="my-3">
                    <h4 class="font-16 semi-font"><span class="fables-iconmap-icon fables-second-text-color pr-2 font-20 mt-1 d-inline-block"></span> Address Information</h4>
                    <p class="font-14 fables-fifth-text-color mt-2 ml-4">level13, 2Elizabeth St, Melbourne, Victor 2000</p>
                </div>
                <div class="my-3">
                    <h4 class="font-16 semi-font"><span class="fables-iconphone fables-second-text-color pr-2 font-20 mt-1 d-inline-block"></span> Call Now </h4>
                    <p class="font-14 fables-fifth-text-color mt-2 ml-4">+333 111 111 000</p>
                </div>
                <div class="my-3">
                    <h4 class="font-16 semi-font"><span class="fables-iconemail fables-second-text-color pr-2 font-20 mt-1 d-inline-block"></span> Mail </h4>
                    <p class="font-14 fables-fifth-text-color mt-2 ml-4">sainawarattun123@gmail.com</p>
                </div>
            </div>
            <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                <h2 class="font-20 semi-font fables-second-border-color border-bottom pb-3 mb-3">EXPLORE OUR SITE</h2>
                <ul class="nav fables-footer-links">
                    <li><a href="about1.html">About Us</a></li>
                    <li><a href="contactus1.html">Contact Us</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="team.html">Team</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="testimonials.html">Testimonials</a></li>
                </ul>
            </div>
                      
        </div> 
        
        </div>
</div>
            <!-- End Footer -->

                	<!-- copyright section start-->
        <div class="copyright fables-main-background-color mt-0 border-0 white-color">
                <ul class="nav fables-footer-social-links just-center fables-light-footer-links">
                    <li><a href="#" target="_blank"><i class="fab fa-google-plus-square"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-pinterest-square"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-twitter-square"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                </ul>
                <p class="mb-0">Copyright © 2023 SNTproject. All rights reserved.</p> 

        </div>
	<!-- copyright section end-->


    <!-- Javascript files-->
    <script src="{{ asset('backend/assets1/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('backend/assets1/vendor/loadscreen/js/ju-loading-screen.js')}}"></script>
    <script src="{{ asset('backend/assets1/vendor/jquery-circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{ asset('backend/assets1/vendor/popper/popper.min.js')}}"></script>
    <script src="{{ asset('backend/assets1/vendor/timeline/jquery.timelify.js')}}"></script>
    <script src="{{ asset('backend/assets1/vendor/WOW-master/dist/wow.min.js')}}"></script>
    <script src="{{ asset('backend/assets1/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('backend/assets1/vendor/bootstrap/js/bootstrap-4-navbar.js')}}"></script>
    <script src="{{ asset('backend/assets1/vendor/owlcarousel/owl.carousel.min.js')}}"></script> 
    <script src="{{ asset('backend/assets1/vendor/fancybox-master/jquery.fancybox.min.js')}}"></script>
    <script src="{{ asset('backend/assets1/vendor/video-background/jquery.mb.YTPlayer.js')}}"></script>
    <script src="{{ asset('backend/assets1/custom/js/custom.js')}}"></script>  
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