<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" href="assets/img/favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta name="description" content="Web site created using create-react-app" />
    <link rel="apple-touch-icon" href="assets/img/favicon.png" />
    <title>BFC Softtech</title>

    <!-- carousel.min.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- theme.default.min.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap.min.css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- fontawesome.min.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- bootstrap-icons.min.css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

</head>

<body>

    <button onclick="topFunction()" id="scrolltotopbtn" title="Go to top">
        <i class="bi bi-chevron-double-up"></i>
    </button>
   
    <nav class="navbar navbar-expand-lg bg-body-tertiary custom-shadow">
        <div id="navbar" class="container-fluid">
            <span class="navbar-brand">
                <a aria-current="page" class="active" href="index"><img src="assets/img/logo/bfc-logo.webp" alt='logo' class="img-fluid logo" /></a>
            </span>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav main-menu pl-lg-5">
                    <li class="nav-item">
                        <a class="nav-link active" href="index" aria-current="page">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about-us">
                            About Us
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="sub-menu dropdown-menu">
                            <div class="hover-icon1">

                                <li class="nav-item">
                                    <a class="dropdown-item nav-link" href="software-development">
                                        Software Development
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item nav-link" href="mobile-app-development">
                                        Mobile App Development
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item nav-link" href="web-development">
                                        Web Development
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item nav-link" href="digital-marketing">
                                        Digital Marketing
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item nav-link" href="ux-ui-design">
                                        UI / UX Design
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item nav-link" href="graphic-logo-design">
                                        Graphic &amp; Logo Design
                                    </a>
                                </li>
                            </div>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="career">Career</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact-us">Contact Us</a></li>
                    <li> <a class="btnc default-btn py-2 px-3 mt-2" href="get-proposal">Get Proposal</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- mobile  -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <span class="navbar-brand">
                <a aria-current="page" class="active" href="index"><img src="assets/img/logo/bfc-logo.webp" alt='logo' class="img-fluid logo" /></a>
            </span>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="">
                <ul class="main-menu mobile-menu-canva pl-lg-5">
                    <li class="nav-item">
                        <a class="nav-link active" href="index" aria-current="page">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about-us">
                            About Us
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="sub-menu dropdown-menu">
                            <div class="hover-icon1">

                                <li class="nav-item">
                                    <a class="dropdown-item nav-link" href="software-development">
                                        Software Development
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item nav-link" href="app-development">
                                        Mobile App Development
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item nav-link" href="web-development">
                                        Web Development
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item nav-link" href="digital-marketing">
                                        Digital Marketing
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item nav-link" href="ux-ui-design">
                                        UI / UX Design
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item nav-link" href="graphic-logo-design">
                                        Graphic &amp; Logo Design
                                    </a>
                                </li>
                            </div>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="/portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="/career">Career</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contact">Contact Us</a></li>
                    <li class="bg-white"> <a class="btnc default-btn py-2 px-3 mt-2" href="/get-proposal">Get Proposal</a></li>
                </ul>
            </div>
        </div>
    </div>