  <!-- Main Header-->
  <header class="main-header header-style-two">
    <div class="outer-box">
      <div class="auto-container">
        <div class="header-lower anim-fade-move" data-delay="0.25">
          <div class="inner-container">
            <!-- Main box -->
            <div class="main-box">
              <div class="logo-box">
                <div class="logo">
                  <a href="{{ route('home') }}"><img src="{{ url('images/logo/alberta-logo.png') }}" alt="Logo" /></a>
                </div>
              </div>

              <!--Nav Box-->
              <div class="nav-outer">
                <nav class="nav main-menu">
                  <ul class="navigation">
                    <li class="current"><a href="#hero">Home</a>
                     
                    </li>
                    <li><a href="#who-we-are">Who We Are</a>
                      
                    </li>
                    <li><a href="#our-services">Our Services</a></li>
                    <li><a href="#testimonials">Testimonials</a></li>
                    <li><a href="#faqs">FAQ's</a></li>
                  
                    
                  </ul>
                </nav>
              </div>
              <div class="right-box">
                <!-- Phone Box -->
                <a class="theme-btn btn-style-three" href="#contact-us">
                  <span class="btn-title">Get a Quote </span>
                </a>
              </div>
              <!--Mobile Navigation Toggler-->
              <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
      <div class="menu-backdrop"></div>
      <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
      <nav class="menu-box">
        <div class="upper-box">
          <div class="nav-logo">
            <a href="{{ route('home') }}"><img src="{{ url('images/logo/alberta-logo.png') }}" alt="" /></a>
          </div>
          <div class="close-btn"><i class="icon fa fa-times"></i></div>
        </div>
        <ul class="navigation clearfix">
          <!--Keep This Empty / Menu will come through Javascript-->
        </ul>
        <ul class="contact-list-one">
          <li>
            <i class="icon lnr-icon-envelope1"></i>
            <span class="title">Send Email</span>
            <div class="text"><span class="__cf_email__">info@albertaheatingservices.ca</span></a></div>
          </li>
        </ul>
        <ul class="social-links">
          <li><a href="#"><i class="icon fab fa-twitter"></i></a></li>
          <li><a href="#"><i class="icon fab fa-facebook-f"></i></a></li>
          <li><a href="#"><i class="icon fab fa-pinterest-p"></i></a></li>
          <li><a href="#"><i class="icon fab fa-vimeo-v"></i></a></li>
        </ul>
      </nav>
    </div>
    <!-- End Mobile Menu -->

    <!-- Header Search -->
    <div class="search-popup">
      <span class="search-back-drop"></span>
      <button class="close-search"><span class="fa fa-times"></span></button>

      <div class="search-inner">
        <form method="post" action="">
          <div class="form-group">
            <input type="search" name="search-field" value="" placeholder="Search..." required="" />
            <button type="submit"><i class="fa fa-search"></i></button>
          </div>
        </form>
      </div>
    </div>
    <!-- End Header Search -->

    <!-- Sticky Header  -->
    <div class="sticky-header">
      <div class="auto-container">
        <div class="inner-container">
          <!--Logo-->
          <div class="logo">
            <a href="{{ route('home') }}"><img src="{{ url('images/logo/alberta-logo.png') }}" alt="" /></a>
          </div>

          <!--Right Col-->
          <div class="nav-outer">
            <!-- Main Menu -->
            <nav class="main-menu">
              <div class="navbar-collapse show collapse clearfix">
                <ul class="navigation clearfix">
                  <!--Keep This Empty / Menu will come through Javascript-->
                </ul>
              </div>
            </nav>
            <!-- Main Menu End-->

            <!--Mobile Navigation Toggler-->
            <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Sticky Menu -->
  </header>
  <!--End Main Header -->