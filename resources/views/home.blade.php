
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>E School, One Stop Solution for all Smart School</title>
    <meta name="keyword" content="Free school management software, School administration software, Student information system, Education management software, Online gradebook, Classroom management, Teacher scheduling, Student attendance tracking, Parent-teacher communication, School records management, Exam and assessment management, Student enrollment system, Timetable and scheduling, Fee management, Academic management, Report card generation, School communication platform, Learning management system &#40;LMS&#41;, School ERP " />
    <meta name="description" content="E School - One-stop solution to "Unlock the potential of education with our free school management software and school app. Simplify administrative tasks, enhance communication, and keep parents, teachers, and students connected. Get started for free and transform the way you manage your school!"" />
    <meta name="author" content="E School">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.jpg') }}" />

    <!-- CSS here -->
    {{-- <link rel="stylesheet" href="{{ asset('front/css/all.min.css') }}" /> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"referrerpolicy="no-referrer" />
    {{-- <link rel="stylesheet" href="https://freeschoolapp.com/assets/frontend/css/LineIcons.2.0.css" /> --}}
    {{-- <link rel="stylesheet" href="{{ asset('front/css/lineicons.css') }}" /> --}}
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/tiny-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/glightbox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/sweetalert-custom.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/saas_main.css') }}" />

    <!-- Google Analytics -->
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-JZTESMFGZH"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-JZTESMFGZH');
</script>
    <!-- Theme Color Options -->
    <script type="text/javascript">
        document.documentElement.style.setProperty('--thm-primary', '#906bff');
        document.documentElement.style.setProperty('--thm-header-text', '#081828');
        document.documentElement.style.setProperty('--thm-text', '#888');
        document.documentElement.style.setProperty('--thm-menu-bg', 'transparent');
        document.documentElement.style.setProperty('--thm-menu-color', '#fff');
        document.documentElement.style.setProperty('--thm-footer-bg', '#081828');
        document.documentElement.style.setProperty('--thm-footer-text', 'rgb(255, 255, 255)');
    </script>

    <script src="{{ asset('front/js/jquery.min.js') }}"></script>
    <script type="text/javascript">
        var base_url = "{{ route('home') }}";
        var csrfData = {"school_csrf_name":"001d9bde5e5442936d05448770755c3d"};
        $(function($) {
            $.ajaxSetup({
                cache: false,
                data: csrfData
            });
        });
    </script>

</head>
<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- /End Preloader -->

    <!-- Start Header Area -->
    <header class="header navbar-area">
        <div class="container-md">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="nav-inner">
                        <!-- Start Navbar -->
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="{{ route('home') }}">
                                <img src="{{ asset('front/logo.webp') }}" alt="Logo">
                            </a>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a href="#home" class="page-scroll active" aria-label="Toggle navigation">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#features" class="page-scroll" aria-label="Toggle navigation">Features</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#pricing" class="page-scroll" aria-label="Toggle navigation">Pricing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#faq" class="page-scroll" aria-label="Toggle navigation">Faq</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#contact" class="page-scroll" aria-label="Toggle navigation">Contact</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- navbar collapse -->
                            <div class="header-btn">
                            <div class="button add-list-button">
                                                                <a href="{{ route('login') }}" class="btn">Login</a>
                                                            </div>
                            <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            </div>
                        </nav>
                        <!-- End Navbar -->
                                        </div>
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </header>
    <!-- End Header Area -->

    <!-- Start Slider Area -->
    <section id="home" class="hero-area" style="background-image: url(https://www.iitms.co.in/images/home-banner.webp);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12 col-12">
                    <div class="hero-content">
                        <h1 class="wow fadeInLeft" data-wow-delay=".4s">"E School: Empower Your School for Free"</h1>
                        <p class="wow fadeInLeft" data-wow-delay=".6s">"Experience the future of education with our "E School" where you can Connect, communicate, and collaborate effortlessly with students, parents, and teachers.</p>
                        {{-- <div class="button wow fadeInLeft" data-wow-delay=".8s">
                        <a href="https://freeschoolapp.com/demoschool" class="btn"><i class='fas fa-globe'></i> Demo School</a><a href="https://freeschoolapp.com/#pricing" class="btn btn-alt"><i class='fas fa-coins'></i> Plan Price</a></div> --}}
                    </div>
                </div>
                {{-- <div class="col-lg-7 col-md-12 col-12">
                    <div class="hero-image wow fadeInRight" data-wow-delay=".4s">
                        <img src="https://freeschoolapp.com/assets/frontend/images/saas/0756c234a5441801d0e021c41252d0f6.png" alt="#">
                        <img class="overly" src="https://freeschoolapp.com/assets/frontend/images/saas/slider_over.png" alt="#">
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- End Slider Area -->

    <!-- Start Features Area -->
    <section id="features" class="features section" style="background-image: url(https://freeschoolapp.com/assets/frontend/images/saas/features-bg.png)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3 class="wow zoomIn" data-wow-delay=".2s">Features</h3>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Your Experience Gets Better And Better Over Time.</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">A "E School" is a digital tool that enhances the educational experience by offering various features for students, teachers, parents, and administrators within schools or educational institutions. It provides resources, communication tools, administrative functions, and more to improve school life with minimal fees.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-feature wow fadeInUp" data-wow-delay="0.2s">
                        <h3>Multiple Schools</h3>
                        <p>ESchool has multi school capabilities and can be used to run multiple schools at once.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-feature wow fadeInUp" data-wow-delay="0.4s">
                        <h3>Student Information System</h3>
                        <p>Store and manage student information easily</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-feature wow fadeInUp" data-wow-delay="0.2s">
                        <h3>Exam Records Management and Result Checking</h3>
                        <p>Record and publish exam results with ease</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-feature wow fadeInUp" data-wow-delay="0.4s">
                        <h3>Timetable Management</h3>
                        <p>Create, manage and edit timetables.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-feature wow fadeInUp" data-wow-delay="0.6s">
                        <h3>Fee Management</h3>
                        <p>Create fee invoices and record collected payments</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-feature wow fadeInUp" data-wow-delay="0.2s">
                        <h3>Custom Grading system for different class groups</h3>
                        <p>Create custom grading systems for different class groups</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Features Area -->

    <!-- Start Pricing Table Area -->
    <section id="pricing" class="pricing-table section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3 class="wow zoomIn" data-wow-delay=".2s">Pricing</h3>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Pricing Plan</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">The E School offers a range of valuable features to enhance the educational experience:</p>
                    </div>
                </div>
            </div>
            <div class="row">
                                <div class="col-md-6 col-xl-4 col-xxl-3 pp-plans-container wow fadeInUp" data-wow-delay="0.2s">
                    <div class="pp-plans pxp-is-featured">
                        <div class="pp-plans-top">
                                                    <div class="pp-plans-featured-label">Recommended</div>
                                                    <div class="pp-plans-title">
                                TRY & USE <small>(we charge Rs.99/- to reduce Spam this will be adjusted if you upgrade)</small>                            </div>
                            <div class="pp-plans-price">
                                <div class="pxp-plans-price-monthly">


                                                        ₹99.0<span>/  Lifetime</span>
                                                        </div>
                            </div>
                            <div class="pp-plans-list">
                                <ul class="list-unstyled pricing-feature-list">
                                    <li><i class="lni lni-user"></i>Student Limit : 10</li>
                                    <li><i class="lni lni-user"></i>Parents Limit : 5</li>
                                    <li><i class="lni lni-user"></i>Staff Limit : 5</li>
                                    <li><i class="lni lni-user"></i>Teacher Limit : 5</li>
                                                                            <li><i class="lni lni-close"></i> Attachments Book</li>
                                                                            <li><i class="lni lni-checkmark"></i> Attendance</li>
                                                                            <li><i class="lni lni-close"></i> Bulk Sms And Email</li>
                                                                            <li><i class="lni lni-close"></i> Card Management</li>
                                                                            <li><i class="lni lni-close"></i> Certificate</li>
                                                                            <li><i class="lni lni-close"></i> Custom Domain</li>
                                                                            <li><i class="lni lni-checkmark"></i> Events</li>
                                                                            <li><i class="lni lni-checkmark"></i> Homework</li>
                                                                            <li><i class="lni lni-close"></i> Hostel</li>
                                                                            <li><i class="lni lni-checkmark"></i> Human Resource</li>
                                                                            <li><i class="lni lni-close"></i> Inventory</li>
                                                                            <li><i class="lni lni-checkmark"></i> Library</li>
                                                                            <li><i class="lni lni-close"></i> Live Class</li>
                                                                            <li><i class="lni lni-checkmark"></i> Office Accounting</li>
                                                                            <li><i class="lni lni-close"></i> Online Exam</li>
                                                                            <li><i class="lni lni-checkmark"></i> Reception</li>
                                                                            <li><i class="lni lni-checkmark"></i> Student Accounting</li>
                                                                            <li><i class="lni lni-close"></i> Transport</li>
                                                                            <li><i class="lni lni-close"></i> Website</li>
                                                                    </ul>
                            </div>
                        </div>
                        <div class="pp-plans-bottom">
                            <div class="pp-plans-cta button">
                                                                    <button class="btn plans-purchase" data-id="1" data-loading-text="<i class='fas fa-spinner fa-spin'></i> Processing"> Choose Plan</button>
                                                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-md-6 col-xl-4 col-xxl-3 pp-plans-container wow fadeInUp" data-wow-delay="0.4s">
                    <div class="pp-plans pxp-is-featured">
                        <div class="pp-plans-top">
                                                    <div class="pp-plans-featured-label">Recommended</div>
                                                    <div class="pp-plans-title">
                                BASIC                            </div>
                            <div class="pp-plans-price">
                                <div class="pxp-plans-price-monthly">


                                                    <div class="discount">
                                ₹1000.0                            </div>
                            ₹800.0<span>/ 1 Months </span>
                                                        </div>
                            </div>
                            <div class="pp-plans-list">
                                <ul class="list-unstyled pricing-feature-list">
                                    <li><i class="lni lni-user"></i>Student Limit : 175</li>
                                    <li><i class="lni lni-user"></i>Parents Limit : 175</li>
                                    <li><i class="lni lni-user"></i>Staff Limit : 25</li>
                                    <li><i class="lni lni-user"></i>Teacher Limit : 25</li>
                                                                            <li><i class="lni lni-checkmark"></i> Attachments Book</li>
                                                                            <li><i class="lni lni-checkmark"></i> Attendance</li>
                                                                            <li><i class="lni lni-checkmark"></i> Bulk Sms And Email</li>
                                                                            <li><i class="lni lni-checkmark"></i> Card Management</li>
                                                                            <li><i class="lni lni-checkmark"></i> Certificate</li>
                                                                            <li><i class="lni lni-close"></i> Custom Domain</li>
                                                                            <li><i class="lni lni-checkmark"></i> Events</li>
                                                                            <li><i class="lni lni-checkmark"></i> Homework</li>
                                                                            <li><i class="lni lni-close"></i> Hostel</li>
                                                                            <li><i class="lni lni-close"></i> Human Resource</li>
                                                                            <li><i class="lni lni-close"></i> Inventory</li>
                                                                            <li><i class="lni lni-checkmark"></i> Library</li>
                                                                            <li><i class="lni lni-close"></i> Live Class</li>
                                                                            <li><i class="lni lni-checkmark"></i> Office Accounting</li>
                                                                            <li><i class="lni lni-checkmark"></i> Online Exam</li>
                                                                            <li><i class="lni lni-checkmark"></i> Reception</li>
                                                                            <li><i class="lni lni-checkmark"></i> Student Accounting</li>
                                                                            <li><i class="lni lni-close"></i> Transport</li>
                                                                            <li><i class="lni lni-checkmark"></i> Website</li>
                                                                    </ul>
                            </div>
                        </div>
                        <div class="pp-plans-bottom">
                            <div class="pp-plans-cta button">
                                                                    <button class="btn plans-purchase" data-id="2" data-loading-text="<i class='fas fa-spinner fa-spin'></i> Processing"> Choose Plan</button>
                                                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-md-6 col-xl-4 col-xxl-3 pp-plans-container wow fadeInUp" data-wow-delay="0.6s">
                    <div class="pp-plans pxp-is-featured">
                        <div class="pp-plans-top">
                                                    <div class="pp-plans-featured-label">Recommended</div>
                                                    <div class="pp-plans-title">
                                ADVANCE                            </div>
                            <div class="pp-plans-price">
                                <div class="pxp-plans-price-monthly">


                                                    <div class="discount">
                                ₹5500.0                            </div>
                            ₹4500.0<span>/ 6 Months </span>
                                                        </div>
                            </div>
                            <div class="pp-plans-list">
                                <ul class="list-unstyled pricing-feature-list">
                                    <li><i class="lni lni-user"></i>Student Limit : 350</li>
                                    <li><i class="lni lni-user"></i>Parents Limit : 350</li>
                                    <li><i class="lni lni-user"></i>Staff Limit : 45</li>
                                    <li><i class="lni lni-user"></i>Teacher Limit : 45</li>
                                                                            <li><i class="lni lni-checkmark"></i> Attachments Book</li>
                                                                            <li><i class="lni lni-checkmark"></i> Attendance</li>
                                                                            <li><i class="lni lni-checkmark"></i> Bulk Sms And Email</li>
                                                                            <li><i class="lni lni-checkmark"></i> Card Management</li>
                                                                            <li><i class="lni lni-checkmark"></i> Certificate</li>
                                                                            <li><i class="lni lni-close"></i> Custom Domain</li>
                                                                            <li><i class="lni lni-checkmark"></i> Events</li>
                                                                            <li><i class="lni lni-checkmark"></i> Homework</li>
                                                                            <li><i class="lni lni-checkmark"></i> Hostel</li>
                                                                            <li><i class="lni lni-checkmark"></i> Human Resource</li>
                                                                            <li><i class="lni lni-checkmark"></i> Inventory</li>
                                                                            <li><i class="lni lni-checkmark"></i> Library</li>
                                                                            <li><i class="lni lni-checkmark"></i> Live Class</li>
                                                                            <li><i class="lni lni-checkmark"></i> Office Accounting</li>
                                                                            <li><i class="lni lni-checkmark"></i> Online Exam</li>
                                                                            <li><i class="lni lni-checkmark"></i> Reception</li>
                                                                            <li><i class="lni lni-checkmark"></i> Student Accounting</li>
                                                                            <li><i class="lni lni-checkmark"></i> Transport</li>
                                                                            <li><i class="lni lni-checkmark"></i> Website</li>
                                                                    </ul>
                            </div>
                        </div>
                        <div class="pp-plans-bottom">
                            <div class="pp-plans-cta button">
                                                                    <button class="btn plans-purchase" data-id="3" data-loading-text="<i class='fas fa-spinner fa-spin'></i> Processing"> Choose Plan</button>
                                                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-md-6 col-xl-4 col-xxl-3 pp-plans-container wow fadeInUp" data-wow-delay="0.8s">
                    <div class="pp-plans pxp-is-featured">
                        <div class="pp-plans-top">
                                                    <div class="pp-plans-featured-label">Recommended</div>
                                                    <div class="pp-plans-title">
                                PREMIUM                            </div>
                            <div class="pp-plans-price">
                                <div class="pxp-plans-price-monthly">


                                                    <div class="discount">
                                ₹12000.0                            </div>
                            ₹10500.0<span>/ 1 Years </span>
                                                        </div>
                            </div>
                            <div class="pp-plans-list">
                                <ul class="list-unstyled pricing-feature-list">
                                    <li><i class="lni lni-user"></i>Student Limit : 500</li>
                                    <li><i class="lni lni-user"></i>Parents Limit : 500</li>
                                    <li><i class="lni lni-user"></i>Staff Limit : 100</li>
                                    <li><i class="lni lni-user"></i>Teacher Limit : 100</li>
                                                                            <li><i class="lni lni-checkmark"></i> Attachments Book</li>
                                                                            <li><i class="lni lni-checkmark"></i> Attendance</li>
                                                                            <li><i class="lni lni-checkmark"></i> Bulk Sms And Email</li>
                                                                            <li><i class="lni lni-checkmark"></i> Card Management</li>
                                                                            <li><i class="lni lni-checkmark"></i> Certificate</li>
                                                                            <li><i class="lni lni-checkmark"></i> Custom Domain</li>
                                                                            <li><i class="lni lni-checkmark"></i> Events</li>
                                                                            <li><i class="lni lni-checkmark"></i> Homework</li>
                                                                            <li><i class="lni lni-checkmark"></i> Hostel</li>
                                                                            <li><i class="lni lni-checkmark"></i> Human Resource</li>
                                                                            <li><i class="lni lni-checkmark"></i> Inventory</li>
                                                                            <li><i class="lni lni-checkmark"></i> Library</li>
                                                                            <li><i class="lni lni-checkmark"></i> Live Class</li>
                                                                            <li><i class="lni lni-checkmark"></i> Office Accounting</li>
                                                                            <li><i class="lni lni-checkmark"></i> Online Exam</li>
                                                                            <li><i class="lni lni-checkmark"></i> Reception</li>
                                                                            <li><i class="lni lni-checkmark"></i> Student Accounting</li>
                                                                            <li><i class="lni lni-checkmark"></i> Transport</li>
                                                                            <li><i class="lni lni-checkmark"></i> Website</li>
                                                                    </ul>
                            </div>
                        </div>
                        <div class="pp-plans-bottom">
                            <div class="pp-plans-cta button">
                                                                    <button class="btn plans-purchase" data-id="4" data-loading-text="<i class='fas fa-spinner fa-spin'></i> Processing"> Choose Plan</button>
                                                            </div>
                        </div>
                    </div>
                </div>
                        </div>
        </div>
        <div class="bg-ring-right"></div>
    </section>
    <!--/ End Pricing Table Area -->

    <!-- Start Faq Area -->
    <section class="faq section" id="faq">
        <div class=container>
            <div class=row>
                <div class=col-12>
                    <div class=section-title>
                        <h3 class="wow zoomIn" data-wow-delay=.2s>Faq</h3>
                        <h2 class="wow fadeInUp" data-wow-delay=.4s>For any help you may refer our FAQ Section</h2>
                        <p class="wow fadeInUp" data-wow-delay=.6s>Users can refer to the FAQ section to quickly find solutions to their questions without the need to contact support, making it a time-saving and user-friendly feature.</p>
                    </div>
                </div>
            </div>
            <div class=row>
                <div class=col-12>
                    <div class=accordion id=accordionExample>
                                                <div class="accordion-item">
                            <h2 class="accordion-header" id="heading0">
                                <button class="accordion-button collapsed" type=button data-bs-toggle=collapse data-bs-target="#faq0" aria-expanded="true" aria-controls=collapseOne>
                                    <span class=title><span class="serial">1</span>What is the E School, and what does it offer to educational institutions?</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <div id="faq0" class="accordion-collapse collapse" aria-labelledby="heading0" data-bs-parent="#accordionExample">
                                <div class="accordion-body"><p><span xss=removed>The E School is a comprehensive School Management Software that provides educational institutions with tools to manage various aspects of school operations. It includes features for attendance tracking, fee management, online classes, event scheduling, and much more.</span><br></p></div>
                            </div>
                        </div>
                                            <div class="accordion-item">
                            <h2 class="accordion-header" id="heading1">
                                <button class="accordion-button collapsed" type=button data-bs-toggle=collapse data-bs-target="#faq1" aria-expanded="" aria-controls=collapseOne>
                                    <span class=title><span class="serial">2</span>How do I get started with the E School for my school or educational institution?</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#accordionExample">
                                <div class="accordion-body"><p><span xss=removed>Getting started is easy. You can sign up for the E School on our website, and our onboarding process will guide you through the setup and customization according to your school's needs.</span><br></p></div>
                            </div>
                        </div>
                                            <div class="accordion-item">
                            <h2 class="accordion-header" id="heading2">
                                <button class="accordion-button collapsed" type=button data-bs-toggle=collapse data-bs-target="#faq2" aria-expanded="" aria-controls=collapseOne>
                                    <span class=title><span class="serial">3</span>Is the E School truly free, or are there hidden charges?</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionExample">
                                <div class="accordion-body"><p><span xss=removed>The core features of the E School are indeed free. However, certain advanced features or additional services may have associated fees. You can choose the level of functionality that best suits your school's requirements.</span><br></p></div>
                            </div>
                        </div>
                                            <div class="accordion-item">
                            <h2 class="accordion-header" id="heading3">
                                <button class="accordion-button collapsed" type=button data-bs-toggle=collapse data-bs-target="#faq3" aria-expanded="" aria-controls=collapseOne>
                                    <span class=title><span class="serial">4</span>What platforms and devices are compatible with the E School?</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionExample">
                                <div class="accordion-body"><p><span xss=removed>The E School is designed to work on a wide range of devices and platforms, including web browsers, iOS, and Android, ensuring accessibility for both administrators and users.</span><br></p></div>
                            </div>
                        </div>
                                            <div class="accordion-item">
                            <h2 class="accordion-header" id="heading4">
                                <button class="accordion-button collapsed" type=button data-bs-toggle=collapse data-bs-target="#faq4" aria-expanded="" aria-controls=collapseOne>
                                    <span class=title><span class="serial">5</span>Can I customize the app to match my school's branding and specific needs?</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionExample">
                                <div class="accordion-body"><p><span xss=removed>Yes, the E School allows for customization, enabling you to add your school's logo, colors, and personalize content and features to align with your institution's identity and requirements.</span><br></p></div>
                            </div>
                        </div>
                                            <div class="accordion-item">
                            <h2 class="accordion-header" id="heading5">
                                <button class="accordion-button collapsed" type=button data-bs-toggle=collapse data-bs-target="#faq5" aria-expanded="" aria-controls=collapseOne>
                                    <span class=title><span class="serial">6</span>What features are included in the School Management Software?</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <div id="faq5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionExample">
                                <div class="accordion-body"><p><span xss=removed>The software includes features for attendance management, fee collection, online exams, event scheduling, student data management, and much more. It's a comprehensive solution for all school management needs.</span><br></p></div>
                            </div>
                        </div>
                                            <div class="accordion-item">
                            <h2 class="accordion-header" id="heading6">
                                <button class="accordion-button collapsed" type=button data-bs-toggle=collapse data-bs-target="#faq6" aria-expanded="" aria-controls=collapseOne>
                                    <span class=title><span class="serial">7</span>How does the app handle student data and privacy in compliance with regulations?</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <div id="faq6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordionExample">
                                <div class="accordion-body"><p><span xss=removed>The E School takes data privacy seriously and follows all relevant regulations. Data is securely stored, and user access is controlled, ensuring compliance with data protection laws</span><br></p></div>
                            </div>
                        </div>
                                            <div class="accordion-item">
                            <h2 class="accordion-header" id="heading7">
                                <button class="accordion-button collapsed" type=button data-bs-toggle=collapse data-bs-target="#faq7" aria-expanded="" aria-controls=collapseOne>
                                    <span class=title><span class="serial">8</span>Is technical support available, and how can I get assistance if I encounter issues?</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <div id="faq7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#accordionExample">
                                <div class="accordion-body"><p><span xss=removed>Yes, technical support is available. You can contact our support team through the app, email, or phone for assistance with any issues or questions.</span><br></p></div>
                            </div>
                        </div>
                                            <div class="accordion-item">
                            <h2 class="accordion-header" id="heading8">
                                <button class="accordion-button collapsed" type=button data-bs-toggle=collapse data-bs-target="#faq8" aria-expanded="" aria-controls=collapseOne>
                                    <span class=title><span class="serial">9</span>Does the app support online classes and exams for remote learning?</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <div id="faq8" class="accordion-collapse collapse" aria-labelledby="heading8" data-bs-parent="#accordionExample">
                                <div class="accordion-body"><p><span xss=removed>Yes, the app supports online classes and exams, making it easy to conduct virtual learning and assessments, ensuring continuity in education.</span><br></p></div>
                            </div>
                        </div>
                                            <div class="accordion-item">
                            <h2 class="accordion-header" id="heading9">
                                <button class="accordion-button collapsed" type=button data-bs-toggle=collapse data-bs-target="#faq9" aria-expanded="" aria-controls=collapseOne>
                                    <span class=title><span class="serial">10</span>How can I manage student attendance and track it effectively using the app?</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <div id="faq9" class="accordion-collapse collapse" aria-labelledby="heading9" data-bs-parent="#accordionExample">
                                <div class="accordion-body"><p><span xss=removed>The app offers features for attendance tracking, allowing you to efficiently manage and monitor student attendance through digital means.</span><br></p></div>
                            </div>
                        </div>
                                            <div class="accordion-item">
                            <h2 class="accordion-header" id="heading10">
                                <button class="accordion-button collapsed" type=button data-bs-toggle=collapse data-bs-target="#faq10" aria-expanded="" aria-controls=collapseOne>
                                    <span class=title><span class="serial">11</span>Can I use the app to manage and monitor fees and financial transactions for the school?</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <div id="faq10" class="accordion-collapse collapse" aria-labelledby="heading10" data-bs-parent="#accordionExample">
                                <div class="accordion-body"><p><span xss=removed>Yes, the app includes fee management tools, enabling you to collect fees, track payments, and generate financial reports for your school.</span><br></p></div>
                            </div>
                        </div>
                                            <div class="accordion-item">
                            <h2 class="accordion-header" id="heading11">
                                <button class="accordion-button collapsed" type=button data-bs-toggle=collapse data-bs-target="#faq11" aria-expanded="" aria-controls=collapseOne>
                                    <span class=title><span class="serial">12</span>What security measures are in place to protect data and user information in the app?</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <div id="faq11" class="accordion-collapse collapse" aria-labelledby="heading11" data-bs-parent="#accordionExample">
                                <div class="accordion-body"><p><span xss=removed>We employ robust security measures to protect data and user information, including encryption, access controls, and regular security audits.</span><br></p></div>
                            </div>
                        </div>
                                            <div class="accordion-item">
                            <h2 class="accordion-header" id="heading12">
                                <button class="accordion-button collapsed" type=button data-bs-toggle=collapse data-bs-target="#faq12" aria-expanded="" aria-controls=collapseOne>
                                    <span class=title><span class="serial">13</span>Is it possible to integrate the E School with other software or platforms we use?</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <div id="faq12" class="accordion-collapse collapse" aria-labelledby="heading12" data-bs-parent="#accordionExample">
                                <div class="accordion-body"><p><span xss=removed>Yes, the app supports integration with other software and platforms to streamline operations and data sharing.</span><br></p></div>
                            </div>
                        </div>
                                            <div class="accordion-item">
                            <h2 class="accordion-header" id="heading13">
                                <button class="accordion-button collapsed" type=button data-bs-toggle=collapse data-bs-target="#faq13" aria-expanded="" aria-controls=collapseOne>
                                    <span class=title><span class="serial">14</span>How can I schedule and manage school events and activities through the app?</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <div id="faq13" class="accordion-collapse collapse" aria-labelledby="heading13" data-bs-parent="#accordionExample">
                                <div class="accordion-body"><p><span xss=removed>The app includes an Events Management feature, making it easy to schedule, manage, and promote school events and activities.</span><br></p></div>
                            </div>
                        </div>
                                            <div class="accordion-item">
                            <h2 class="accordion-header" id="heading14">
                                <button class="accordion-button collapsed" type=button data-bs-toggle=collapse data-bs-target="#faq14" aria-expanded="" aria-controls=collapseOne>
                                    <span class=title><span class="serial">15</span>What reporting and analytics tools are available to help us make data-driven decisions in our educational institution?</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <div id="faq14" class="accordion-collapse collapse" aria-labelledby="heading14" data-bs-parent="#accordionExample">
                                <div class="accordion-body"><p><span xss=removed>The app provides reporting and analytics tools, enabling data-driven decision-making by offering insights into attendance, financials, and other critical aspects of school management.</span><br></p></div>
                            </div>
                        </div>
                                        </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End faq Area -->

    <!-- Start Contact Area -->
    <section class="section call-action" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-12">
                    <div class="contact-form">
                        <form action="https://freeschoolapp.com/saas_website/send_email" class="contact-frm" method="post" accept-charset="utf-8">
<input type="hidden" name="school_csrf_name" value="001d9bde5e5442936d05448770755c3d" />
                        <h3 class="mb-5">Contact Us</h3>
                                                                        <div class="form-group wow fadeInUp" data-wow-delay=".2s">
                            <input type="text" class="form-control" name="name" autocomplete="off" placeholder="Name *" value="">
                            <span class="error"></span>
                        </div>
                        <div class="form-group wow fadeInUp" data-wow-delay=".2s">
                            <input type="text" class="form-control" name="email" autocomplete="off" placeholder="Email *" value="">
                            <span class="error"></span>
                        </div>
                        <div class="form-group wow fadeInUp" data-wow-delay=".4s">
                            <input type="text" class="form-control" name="mobile" autocomplete="off" placeholder="Mobile *" value="">
                            <span class="error"></span>
                        </div>
                        <div class="form-group wow fadeInUp" data-wow-delay=".4s">
                            <input type="text" class="form-control" name="subject" autocomplete="off"  placeholder="Subject  *" value="">
                            <span class="error"></span>
                        </div>
                        <div class="form-group wow fadeInUp" data-wow-delay=".6s">
                            <textarea type="text" rows="5" class="form-control alert_settings" placeholder="Type Message *" name="message"></textarea>
                            <span class="error"></span>
                        </div>
                        <div class="button wow fadeInUp" data-wow-delay=".8s">
                            <button class="btn btn-alt" type="submit" data-loading-text="<i class='fas fa-spinner fa-spin'></i> Processing"><i class="fas fa-envelope"></i> Send Message</button>
                        </div>
                        </form>                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-12">
                    <h2 class="contact-title wow fadeInUp" data-wow-delay=".2s">Need Any Urgent Help? Call us Anytime!</h2>
                    <div class="contact-item-wrapper">
                        <div class="row">
                            <div class="col-12 col-md-6 col-xl-12">
                                <div class="contact-item wow fadeInUp" data-wow-delay=".4s">
                                    <div class="contact-icon">
                                        <i class="lni lni-phone"></i>
                                    </div>
                                    <div class="contact-content">
                                        <h4>Phone</h4>
                                        <p>+917984322008</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-xl-12">
                                <div class="contact-item wow fadeInUp" data-wow-delay=".6s">
                                    <div class="contact-icon">
                                        <i class="lni lni-envelope"></i>
                                    </div>
                                    <div class="contact-content">
                                        <h4>Email</h4>
                                        <p>support@eschool.co.cyberwithchirag.info</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-xl-12">
                                <div class="contact-item wow fadeInUp" data-wow-delay=".8s">
                                    <div class="contact-icon">
                                        <i class="lni lni-map-marker"></i>
                                    </div>
                                    <div class="contact-content">
                                        <h4>Address</h4>
                                        <p>Ahmedabad</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Call To Action Area -->

    <!-- Start Footer Area -->
    <footer class="footer">
        <!-- Start Footer Top -->
        <div class="footer-top">
            <div class="container mb-5">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer f-about">
                            <div class="logo">
                                <a href="{{ route('home') }}">
                                    <img src="{{ asset('front/logo.webp') }}" alt="#">
                                </a>
                            </div>
                            <p>"Experience the future of education with our E School. Connect, communicate, and collaborate effortlessly with students, parents, and teachers. Streamline administrative tasks, share resources, and enhance the learning experience. Join us on a journey to transform education. Get started today!"</p>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-8 col-md-8 col-12">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12">
                                <!-- Single Widget -->
                                <div class="single-footer f-link">
                                    <h3>Quick Link</h3>
                                    <ul>
                                        <li><a href="#home" class="page-scroll active" aria-label="Toggle navigation"><i class="fas fa-angle-right"></i> Home</a></li>
                                        <li><a href="#features" class="page-scroll" aria-label="Toggle navigation"><i class="fas fa-angle-right"></i> Features</a></li>
                                        <li><a href="#pricing" class="page-scroll" aria-label="Toggle navigation"><i class="fas fa-angle-right"></i> Pricing</a></li>
                                        <li><a href="#faq" class="page-scroll" aria-label="Toggle navigation"><i class="fas fa-angle-right"></i> Faq</a></li>
                                        <a href="#contact" class="page-scroll" aria-label="Toggle navigation"><i class="fas fa-angle-right"></i> Contact</a>
                                    </ul>
                                </div>
                                <!-- End Single Widget -->
                            </div>
                            <div class="col-lg-8 col-md-8 col-12">
                                <!-- Single Widget -->
                                <div class="single-footer f-link address">
                                    <h3>Address</h3>
                                    <ul>
                                        <li class="clearfix"><i class="lni lni-map-marker"></i> <div style="margin-left: 47px;">Shyamal crossroad, ahmedabad 380015</div></li>
                                        <li class="clearfix"><i class="lni lni-phone"></i> +91 7984322008</li>
                                        <li class="clearfix"><i class="lni lni-envelope"></i> support@eschool.co.cyberwithchirag.info</li>
                                    </ul>
                                </div>
                                <!-- End Single Widget -->
                            </div>
                            {{-- <div class="col-lg-4 col-md-6 col-12">
                                <!-- Single Widget -->
                                <div class="single-footer f-link">
                                    <h3>Social Link</h3>
                                    <ul class="social">
                                        <li><a href="https://facebook.com/freeschoolapp"><i class="lni lni-facebook-filled"></i></a></li>
                                        <li><a href=""><i class="lni lni-twitter-original"></i></a></li>
                                        <li><a href="https://instagram.com/freeschoolapp"><i class="lni lni-instagram"></i></a></li>
                                        <li><a href=""><i class="lni lni-linkedin-original"></i></a></li>
                                        <li><a href="https://youtube.com/reviewindia"><i class="lni lni-youtube"></i></a></li>

                                        <h3>Our other Platform</h3>
                                    </ul><li><a href="https://reviewindia.com" target="blank"><i class="fas fa-angle-right"></i> Review India</a></li>
                                        <li><a href="https://misti-luxurious.com" target="blank"><i class="fas fa-angle-right"></i> Misti Luxurious                                        </a></li>
                                        <li><a href="https://refurbishedbazzar.com" target="blank"><i class="fas fa-angle-right"></i> Refurbished Bazzar</a></li>
                                        </ul>
                                </div>
                                <!-- End Single Widget -->
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-copyright">
                <div class="container d-flex justify-content-between align-items-center">
                    <div class="copyright-text">
                        <div class="footer-copyright__content">
                            <span>© 2023 e-school </span>
                        </div>
                    </div>
                    {{-- <div class="payment-logo">
                        <img src="https://freeschoolapp.com/assets/frontend/images/saas/92e97dcbc5cd3347a1d3d2f898f2d2ec.png" alt="">

                    </div> --}}
                </div>
            </div>

        </div>
        <div class="elfsight-app-60722b20-7205-4bc7-bdd2-fb41cb47e10e" data-elfsight-app-lazy></div>
        <!--/ End Footer Top -->
    </footer>

    <!--/ End Footer Area -->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top">
        <i class="lni lni-chevron-up"></i>
    </a>



    <!-- ========================= JS here ========================= -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"referrerpolicy="no-referrer"></script>
    <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/js/wow.min.js') }}"></script>
    <script src="{{ asset('front/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('front/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('front/js/saas_main.js') }}"></script>
    <script src="{{ asset('front/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('front/js/sweetalert.min.js') }}"></script>
</body>
</html>

<!-- Modal -->
<div class="modal fade" id="regModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">School Subscription</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="https://freeschoolapp.com/saas_website/register" class="school-reg frm-submit-data" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                                                                                        <input type="hidden" name="school_csrf_name" value="001d9bde5e5442936d05448770755c3d" />
                <input type="hidden" name="package_id" value="" id="packageID">
                <section class="card pg-fw mb-4 mt-2">
                    <div class="card-body">
                        <h5 class="chart-title mb-xs">Plan Summary</h5>
                        <div class="mt-2">
                            <ul class="sp-summary" id="summary">
                            </ul>
                        </div>
                    </div>
                </section>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="school_name">School Name *</label>
                            <input id="school_name" name="school_name" type="text" class="form-control" autocomplete="off">
                            <span class="error"></span>
                        </div>
                        <div class="form-group">
                            <label for="school_address">School Address *</label>
                            <input id="school_address" name="school_address" type="text" class="form-control" autocomplete="off">
                            <span class="error"></span>
                        </div>
                        <div class="form-group">
                            <label for="photo">School Logo</label>
                            <input class="form-control" type="file" accept="image/*" id="photo" name="logo_file">
                            <span class="error"></span>
                        </div>
                        <div class="form-group">
                            <label for="school_info">Message</label>
                            <textarea name="message" id="message" rows="5" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="admin_name">Admin Name *</label>
                            <input id="admin_name" name="admin_name" type="text" class="form-control" autocomplete="off">
                            <span class="error"></span>
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender *</label>
                            <select class="form-select" id="gender" name="gender" data-minimum-results-for-search='Infinity'>
                                <option value="">Select a gender</option>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                            </select>
                            <span class="error"></span>
                        </div>
                        <div class="form-group">
                            <label for="admin_phone">Contact Number *</label>
                            <input id="admin_phone" name="admin_phone" type="tel" class="form-control" autocomplete="off">
                            <span class="error"></span>
                        </div>
                        <div class="form-group">
                            <label for="admin_email">Contact Email *</label>
                            <input name="admin_email" type="text" class="form-control" autocomplete="off">
                            <span class="error"></span>
                        </div>
                        <div class="form-group">
                            <label for="admin_password">Admin Login Username *</label>
                            <input name="admin_username" type="text" class="form-control" autocomplete="off">
                            <span class="error"></span>
                        </div>
                        <div class="form-group">
                            <label for="admin_password">Admin Login Password *</label>
                            <input name="admin_password" type="password" class="form-control" autocomplete="off">
                            <span class="error"></span>
                        </div>
                        <div class="form-group">
                            <label for="admin_password">Retype Password *</label>
                            <input name="retype_admin_password" type="password" class="form-control" autocomplete="off">
                            <span class="error"></span>
                        </div>
                        <div class="pp-plans-bottom">
                            <div class="pp-plans-cta button">
                                <button class="btn mb-4" data-id="1" type="submit" data-loading-text="<i class='fas fa-spinner fa-spin'></i> Processing"> Register & Payment</button>
                            </div>
                        </div>
                    </div>
                </div>
                </form>            </div>
        </div>
    </div>
</div>
<!-- Start of Glassix Chat Widget -->
<script>
    var widgetOptions = {
         apiKey: "0c4ee3bb-5e47-4963-b1c3-a1759b20eddc",
         snippetId: "JR88APpMeab4KNwPwH2w"
    };

    (function(n){var u=function(){GlassixWidgetClient&&typeof GlassixWidgetClient=="function"?(window.widgetClient=new GlassixWidgetClient(n),widgetClient.attach(),window.glassixWidgetScriptLoaded&&window.glassixWidgetScriptLoaded()):f()},f=function(){r.onload=u;r.src="https://cdn.glassix.net/clients/widget.1.2.min.js";i.parentNode.removeChild(t);i.parentNode.insertBefore(r,i)},i=document.getElementsByTagName("script")[0],t=document.createElement("script"),r;(t.async=!0,t.type="text/javascript",t.crossorigin="anonymous",t.id="glassix-widget-script",r=t.cloneNode(),t.onload=u,t.src="https://cdn.glassix.com/clients/widget.1.2.min.js",!document.getElementById(t.id)&&document.body)&&(i.parentNode.insertBefore(t,i),t.onerror=f)})(widgetOptions)
    </script>
    <!-- End of Glassix Chat Widget -->


<script type="text/javascript">
    $("#gender").select2({
        width: "100%"
    });

    $("form.frm-submit-data").each(function(i, el) {
        var $this = $(el);
        $this.on('submit', function(e) {
            e.preventDefault();
            var btn = $this.find('[type="submit"]');
            $.ajax({
                url: $(this).attr('action'),
                type: "POST",
                data: new FormData(this),
                dataType: "json",
                contentType: false,
                processData: false,
                cache: false,
                beforeSend: function() {
                    btn.button('loading');
                },
                success: function(data) {
                    $('.error').html("");
                    if (data.status == "fail") {
                        $.each(data.error, function(index, value) {
                            $this.find("[name='" + index + "']").parents('.form-group').find('.error').html(value);
                        });
                    } else {
                        if (data.url) {
                            window.location.href = data.url;
                        } else if (data.status == "access_denied") {
                            window.location.href = base_url + "dashboard";
                        } else {
                            location.reload(true);
                        }
                    }
                },
                complete: function() {
                    btn.button('reset');
                },
                error: function() {
                    btn.button('reset');
                }
            });
        });
    });
</script>
