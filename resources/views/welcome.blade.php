<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Apotik | Landing</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Bootstrap App Landing Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Small Apps Template v1.0">

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/drugstore.png" />
  
  <!-- PLUGINS CSS STYLE -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  <link rel="stylesheet" href="plugins/fancybox/jquery.fancybox.min.css">
  <link rel="stylesheet" href="plugins/aos/aos.css">

  <!-- CUSTOM CSS -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />


</head>

<body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">


<nav class="navbar main-nav navbar-expand-lg px-2 px-sm-0 py-2 py-lg-0">
  <div class="container">
	{{-- ini untuk logo small apps --}}
    <a class="navbar-brand" href="index.html"><img src="images/drugstore.png" alt="logo" width="20%"></a> 
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="ti-menu"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Home
            <span><i class="ti-angle-down"></i></span>
          </a>
          <!-- Dropdown list -->
          <ul class="dropdown-menu">
            <li><a class="dropdown-item active" href="#">soon</a></li>
            <li><a class="dropdown-item" href="#">soon 2</a></li>
            <li><a class="dropdown-item active3" href="#">soon 3</a></li>

            <li class="dropdown dropdown-submenu dropright">
              <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0301" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu</a>

              <ul class="dropdown-menu" aria-labelledby="dropdown0301">
                <li><a class="dropdown-item" href="#">soon</a></li>
                <li><a class="dropdown-item" href="#">soon</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="nav-item dropdown @@pages">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Pages
            <span><i class="ti-angle-down"></i></span>
          </a>
          <!-- Dropdown list -->
          <ul class="dropdown-menu">
            <li><a class="dropdown-item @@team" href="team.html">Team</a></li>
            <li><a class="dropdown-item @@career" href="career.html">Career</a></li>
            <li><a class="dropdown-item @@blog" href="blog.html">Blog</a></li>
            <li><a class="dropdown-item @@blogSingle" href="blog-single.html">Blog Single</a></li>
            <li><a class="dropdown-item @@privacy" href="privacy-policy.html">Privacy</a></li>
            <li><a class="dropdown-item @@faq" href="FAQ.html">FAQ</a></li>
            <li><a class="dropdown-item" href="sign-in.html">Sign In</a></li>
            <li><a class="dropdown-item" href="sign-up.html">Sign Up</a></li>
            <li><a class="dropdown-item" href="404.html">404</a></li>
            <li><a class="dropdown-item" href="comming-soon.html">Coming Soon</a></li>

            <li class="dropdown dropdown-submenu dropleft">
              <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0501" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu</a>

              <ul class="dropdown-menu" aria-labelledby="dropdown0501">
                <li><a class="dropdown-item" href="index.html">Submenu 21</a></li>
                <li><a class="dropdown-item" href="index.html">Submenu 22</a></li>
              </ul>
            </li>
          </ul>
        </li>
		<li>
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
		</li>
    </ul>
    </div>
</div>
</nav>

<!--====================================
=            Hero Section            =
=====================================-->
<section class="section gradient-banner">
	<div class="shapes-container">
		<div class="shape" data-aos="fade-down-left" data-aos-duration="1500" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-up-right" data-aos-duration="1000" data-aos-delay="200"></div>
		<div class="shape" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"></div>
		<div class="shape" data-aos="fade-down-left" data-aos-duration="1000" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-down-left" data-aos-duration="1000" data-aos-delay="100"></div>
		<div class="shape" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300"></div>
		<div class="shape" data-aos="fade-down-right" data-aos-duration="500" data-aos-delay="200"></div>
		<div class="shape" data-aos="fade-down-right" data-aos-duration="500" data-aos-delay="100"></div>
		<div class="shape" data-aos="zoom-out" data-aos-duration="2000" data-aos-delay="500"></div>
		<div class="shape" data-aos="fade-up-right" data-aos-duration="500" data-aos-delay="200"></div>
		<div class="shape" data-aos="fade-down-left" data-aos-duration="500" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-up" data-aos-duration="500" data-aos-delay="0"></div>
		<div class="shape" data-aos="fade-down" data-aos-duration="500" data-aos-delay="0"></div>
		<div class="shape" data-aos="fade-up-right" data-aos-duration="500" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-down-left" data-aos-duration="500" data-aos-delay="0"></div>
	</div>
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6 order-2 order-md-1 text-center text-md-left">
				<h1 class="text-white font-weight-bold mb-4">Apotik Admin Dashboard</h1>
				<p class="text-white mb-5">Buat Administrasi Obatmu Lebih Mudah dengan Apotik.</p>
				<a href="https://wa.me/6281351455082" target="_blank" class="btn btn-main-md">Download Now</a>
			</div>
			<div class="col-md-6 text-center order-1 order-md-2">
				<img class="img-fluid rounded" src="images/tampil.jpg" alt="screenshot">
</div>

		</div>
	</div>
</section>
<!--====  End of Hero Section  ====-->

<section class="section pt-0 position-relative pull-top">
	<div class="container">
		<div class="rounded shadow p-5 bg-white">
			<div class="row">
				<div class="col-lg-4 col-md-6 mt-5 mt-md-0 text-center">
					{{-- <i class="ti-paint-bucket text-primary h1"></i> --}}
					<i class="fa fa-medkit text-primary h1"></i>
					<h3 class="mt-4 text-capitalize h5 ">Mudah</h3>
					<p class="regular text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam non, recusandae
						tempore ipsam dignissimos molestias.</p>
				</div>
				<div class="col-lg-4 col-md-6 mt-5 mt-md-0 text-center">
					<i class="fa fa-flask text-primary h1"></i>
					<h3 class="mt-4 text-capitalize h5 ">Handal</h3>
					<p class="regular text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam non, recusandae
						tempore ipsam dignissimos molestias.</p>
				</div>
				<div class="col-lg-4 col-md-12 mt-5 mt-lg-0 text-center">
					<i class="fa fa-capsules text-primary h1"></i>
					<h3 class="mt-4 text-capitalize h5 ">Responsif</h3>
					<p class="regular text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam non, recusandae
						tempore ipsam dignissimos molestias.</p>
					</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="call-to-action-app section bg-blue">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2>Saatnya Beralih ke Apotik</h2>
				<p>Download over 2 million humans .Get <a href="#">Apotik</a> free forever!
					<br>Cepetan Di Pake Aplikasinya.</p>
				<ul class="list-inline">
					<li class="list-inline-item">
						<a href="" class="btn btn-rounded-icon">
							<i class="ti-apple"></i>
							Iphone
						</a>
					</li>
					<li class="list-inline-item">
						<a href="" class="btn btn-rounded-icon">
							<i class="ti-android"></i>
							Android
						</a>
					</li>
					<li class="list-inline-item">
						<a href="" class="btn btn-rounded-icon">
							<i class="ti-microsoft-alt"></i>
							Windows
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<!--============================
=            Footer            =
=============================-->
<footer>
  <div class="footer-main">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-12 m-md-auto align-self-center">
          <div class="block">
            <a href="index.html"><img src="images/drugstore.png" alt="footer-logo" width="20%" style="filter:invert(100%);"></a>
            <!-- Social Site Icons -->
            <ul class="social-icon list-inline">
              <li class="list-inline-item">
                <a href="#"><i class="ti-facebook"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="#"><i class="ti-twitter"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="#"><i class="ti-instagram"></i></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
          <div class="block-2">
            <!-- heading -->
            <h6>Product</h6>
            <!-- links -->
            <ul>
              <li><a href="team.html">Teams</a></li>
              <li><a href="blog.html">Blogs</a></li>
              <li><a href="FAQ.html">FAQs</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
          <div class="block-2">
            <!-- heading -->
            <h6>Resources</h6>
            <!-- links -->
            <ul>
              <li><a href="sign-up.html">Singup</a></li>
              <li><a href="sign-in.html">Login</a></li>
              <li><a href="blog.html">Blog</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
          <div class="block-2">
            <!-- heading -->
            <h6>Company</h6>
            <!-- links -->
            <ul>
              <li><a href="career.html">Career</a></li>
              <li><a href="contact.html">Contact</a></li>
              <li><a href="team.html">Investor</a></li>
              <li><a href="privacy.html">Terms</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
          <div class="block-2">
            <!-- heading -->
            <h6>Company</h6>
            <!-- links -->
            <ul>
              <li><a href="about.html">About</a></li>
              <li><a href="contact.html">Contact</a></li>
              <li><a href="team.html">Team</a></li>
              <li><a href="privacy-policy.html">Privacy Policy</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="text-center bg-dark py-4">
    <small class="text-secondary">Copyright &copy; <script>document.write(new Date().getFullYear())</script>. Designed &amp; Developed by <a href="#">Apotik</a></small class="text-secondary">
  </div>

	<div class="text-center bg-dark py-1">
   <small> <p>Distributed By <a href="#">Apotik</a></p></small class="text-secondary">
  </div>
</footer>


  <!-- To Top -->
  <div class="scroll-top-to">
    <i class="ti-angle-up"></i>
  </div>
  
  <!-- JAVASCRIPTS -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="plugins/bootstrap/bootstrap.min.js"></script>
  <script src="plugins/slick/slick.min.js"></script>
  <script src="plugins/fancybox/jquery.fancybox.min.js"></script>
  <script src="plugins/syotimer/jquery.syotimer.min.js"></script>
  <script src="plugins/aos/aos.js"></script> 
  <script src="js/script.js"></script>
</body>

</html>