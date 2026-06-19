<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Alberta')</title>
    <!-- favicon -->
    <!-- Stylesheets -->
    <!-- Stylesheets -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/logo/favicon-96x96.png" type="image/x-icon">
    <link rel="icon" href="images/logo/favicon-96x96.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>


    <div class="page-wrapper">
        @include('components.navbar')
        @yield('content')

        @include('components.footer')



    </div>
    <!-- Floating Action Buttons -->
    <div class="floating-action-buttons">
        <a href="#enquire" class="fab-item fab-enquire">
            <div class="fab-icon">
                <i class="fas fa-truck"></i>
            </div>
            <span class="fab-label">Enquire Now</span>
        </a>
        <a href="#quick-info" class="fab-item fab-info">
            <div class="fab-icon">
                <i class="fas fa-file-alt"></i>
            </div>
            <span class="fab-label">Quick Info</span>
        </a>
        <a href="#locate" class="fab-item fab-locate">
            <div class="fab-icon">
                <i class="fas fa-map-marker-alt"></i>
            </div>
            <span class="fab-label">Locate Us</span>
        </a>
        <a href="tel:4034987777" class="fab-item fab-call">
            <div class="fab-icon">
                <i class="fas fa-phone-alt"></i>
            </div>
            <span class="fab-label">Call Now</span>
        </a>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/gsap.js"></script>
    <script src="js/gsap-scroll-to-plugin.js"></script>
    <script src="js/gsap-scroll-smoother.js"></script>
    <script src="js/gsap-scroll-trigger.js"></script>
    <script src="js/gsap-split-text.js"></script>
    <script src="js/splitType.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/select2.min.js"></script>
    <script src="js/knob.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/mixitup.js"></script>
    <script src="js/script.js"></script>

</body>

</html>
