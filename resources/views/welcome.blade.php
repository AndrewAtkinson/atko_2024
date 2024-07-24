<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Andrew Atkinson - {{$experiences->first()->title}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="author" content="Andrew Atkinson"/>
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="css/reset.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css" type="text/css">
    <link rel="stylesheet" href="css/animations.css" type="text/css">
    <link rel="stylesheet" href="css/perfect-scrollbar.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/main.css" type="text/css">
</head>

<body>
<!-- Animated Background -->
<div class="lm-animated-bg" style="background-image: url(img/main_bg.png);"></div>
<!-- /Animated Background -->

<!-- Loading animation -->
<div class="preloader">
    <div class="preloader-animation">
        <div class="preloader-spinner">
        </div>
    </div>
</div>
<!-- /Loading animation -->

<div class="page">
    <div class="page-content">

        <header id="site_header" class="header mobile-menu-hide">
            <div class="header-content">
                <div class="header-photo">
                    <img src="img/main_photo.jpg" alt="Andrew Atkinson">
                </div>
                <div class="header-titles">
                    <h2>Andrew Atkinson</h2>
                    <h4>{{$experiences->first()->title}}</h4>
                </div>
            </div>

            <ul class="main-menu">
                <li class="active">
                    <a href="#home" class="nav-anim">
                        <span class="menu-icon lnr lnr-home"></span>
                        <span class="link-text">Home</span>
                    </a>
                </li>
                <li>
                    <a href="#about-me" class="nav-anim">
                        <span class="menu-icon lnr lnr-user"></span>
                        <span class="link-text">About Me</span>
                    </a>
                </li>
                <li>
                    <a href="#resume" class="nav-anim">
                        <span class="menu-icon lnr lnr-graduation-hat"></span>
                        <span class="link-text">Resume</span>
                    </a>
                </li>
                <li>
                    <a href="#contact" class="nav-anim">
                        <span class="menu-icon lnr lnr-envelope"></span>
                        <span class="link-text">Contact</span>
                    </a>
                </li>
            </ul>

            <div class="social-links">
                <ul>
                    <li><a href="https://www.linkedin.com/in/andrewatkinsonvs/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="https://www.facebook.com/andyatkinson84" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://twitter.com/Fever84" target="_blank"><i class="fab fa-twitter"></i></a></li>
                </ul>
            </div>

            {{-- <div class="header-buttons">
                <a href="#" target="_blank" class="btn btn-primary">Download CV</a>
            </div> --}}

            <div class="copyrights">© {{ date('Y') }} All rights reserved.</div>
        </header>

        <!-- Mobile Navigation -->
        <div class="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <!-- End Mobile Navigation -->

        <div class="content-area">
            <div class="animated-sections">
                <!-- Home Subpage -->
                <section data-id="home" class="animated-section start-page">
                    <div class="section-content vcentered">

                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="title-block">
                                    <h2>Andrew Atkinson</h2>
                                    <div class="owl-carousel text-rotation">
                                        <div class="item">
                                            <div class="sp-subtitle">{{$experiences->first()->title}}</div>
                                        </div>

                                        <div class="item">
                                            <div class="sp-subtitle">PHP Developer</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                <!-- End of Home Subpage -->

                <!-- About Me Subpage -->
                <section data-id="about-me" class="animated-section">
                    <div class="section-content">
                        <div class="page-title">
                            <h2>About <span>Me</span></h2>
                        </div>

                        <!-- Personal Information -->
                        <div class="row">
                            @include('about-me')
                        </div>
                        <!-- End of Personal Information -->

                        <div class="white-space-50"></div>

                        <!-- Services -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <div class="block-title">
                                    <h3>What <span>I Do</span></h3>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="col-inner">
                                    <div class="info-list-w-icon">
                                        <div class="info-block-w-icon">
                                            <div class="ci-icon">
                                                <i class="lnr lnr-store"></i>
                                            </div>
                                            <div class="ci-text">
                                                <h4>Ecommerce</h4>
                                                <p>I design, develop, and maintain robust e-commerce platforms API's and features. From creating custom features and ensuring website security and performance, I handle every technical aspect to provide a seamless online shopping experience.</p>
                                            </div>
                                        </div>
                                        <div class="info-block-w-icon">
                                            <div class="ci-icon">
                                                <i class="lnr lnr-laptop-phone"></i>
                                            </div>
                                            <div class="ci-text">
                                                <h4>Tech Enthusias</h4>
                                                <p>I stay updated with the latest trends and technologies in e-commerce, from advanced security measures to analytics, ensuring my business remains at the cutting edge.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- End of Services -->

                        <div class="white-space-30"></div>

                        @include('testimonials')

                        <div class="white-space-50"></div>

                        @include('facts')
                    </div>
                </section>
                <!-- End of About Me Subpage -->

                <!-- Resume Subpage -->
                <section data-id="resume" class="animated-section">
                    <div class="section-content">
                        <div class="page-title">
                            <h2>Resume</h2>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-7">

                                @include('education')

                                <div class="white-space-50"></div>

                                @include('experience')

                            </div>

                            @include('skills')

                            <div class="white-space-10"></div>

                            @include('knowledge')
                        </div>
                    </div>

            </div>
            </section>
            <!-- End of Resume Subpage -->


            <!-- Contact Subpage -->
            <section data-id="contact" class="animated-section">
                <div class="section-content">
                    <div class="page-title">
                        <h2>Contact</h2>
                    </div>

                    <div class="row">
                        <!-- Contact Info -->
                        <div class="col-xs-12 col-sm-4">
                            <div class="lm-info-block gray-default">
                                <i class="lnr lnr-map-marker"></i>
                                <h4>Hartlepool, UK</h4>
                                <span class="lm-info-block-value"></span>
                                <span class="lm-info-block-text"></span>
                            </div>

                            <div class="lm-info-block gray-default">
                                <i class="lnr lnr-envelope"></i>
                                <h4>atkinson.andy@gmail.com</h4>
                                <span class="lm-info-block-value"></span>
                                <span class="lm-info-block-text"></span>
                            </div>

                            <div class="lm-info-block gray-default">
                                <i class="lnr lnr-checkmark-circle"></i>
                                <h4>Freelance Available</h4>
                                <span class="lm-info-block-value"></span>
                                <span class="lm-info-block-text"></span>
                            </div>

                        </div>
                        <!-- End of Contact Info -->

                        <!-- Contact Form -->
                        <div class="col-xs-12 col-sm-8">
                            <div class="lmpixels-map">
                                <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            </div>
                            <div class="block-title">
                                <h3>How Can I <span>Help You?</span></h3>
                            </div>

                            @livewire('contact-form')
                            <!-- End of Contact Form -->
                        </div>
                    </div>

                </div>
            </section>
            <!-- End of Contact Subpage -->
        </div>
    </div>

</div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/animating.js"></script>

<script src="js/imagesloaded.pkgd.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>

<script src='js/perfect-scrollbar.min.js'></script>
<script src='js/jquery.shuffle.min.js'></script>
<script src='js/masonry.pkgd.min.js'></script>
<script src='js/owl.carousel.min.js'></script>
<script src="js/jquery.magnific-popup.min.js"></script>

<script src="js/main.js"></script>
</body>
</html>
