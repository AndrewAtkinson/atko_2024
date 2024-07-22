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

            <div class="header-buttons">
                <a href="#" target="_blank" class="btn btn-primary">Download CV</a>
            </div>

            <div class="copyrights">© 2020 All rights reserved.</div>
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
                            <div class="col-xs-12 col-sm-7">
                                <p>Proin volutpat mauris ac pellentesque pharetra. Suspendisse congue elit vel odio
                                    suscipit, sit amet tempor nisl imperdiet. Quisque ex justo, faucibus ut mi in,
                                    condimentum finibus dolor. Aliquam vitae hendrerit dolor, eget imperdiet mauris.
                                    Maecenas et ante id ipsum condimentum dictum et vel massa. Ut in imperdiet dolor,
                                    vel consectetur dui.</p>
                            </div>

                            <div class="col-xs-12 col-sm-5">
                                <div class="info-list">
                                    <ul>
                                        <li>
                                            <span class="title">Age</span>
                                            <span class="value">32</span>
                                        </li>

                                        <li>
                                            <span class="title">Residence</span>
                                            <span class="value">USA</span>
                                        </li>

                                        <li>
                                            <span class="title">Address</span>
                                            <span class="value">88 Some Street, Some Town</span>
                                        </li>

                                        <li>
                                            <span class="title">e-mail</span>
                                            <span class="value">email@example.com</span>
                                        </li>

                                        <li>
                                            <span class="title">Phone</span>
                                            <span class="value">+0123 123 456 789</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
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
                                                <p>Pellentesque pellentesque, ipsum sit amet auctor accumsan, odio
                                                    tortor bibendum massa, sit amet ultricies ex lectus scelerisque
                                                    nibh. Ut non sodales.</p>
                                            </div>
                                        </div>
                                        <div class="info-block-w-icon">
                                            <div class="ci-icon">
                                                <i class="lnr lnr-laptop-phone"></i>
                                            </div>
                                            <div class="ci-text">
                                                <h4>Web Design</h4>
                                                <p>Pellentesque pellentesque, ipsum sit amet auctor accumsan, odio
                                                    tortor bibendum massa, sit amet ultricies ex lectus scelerisque
                                                    nibh. Ut non sodales.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                <div class="col-inner">
                                    <div class="info-list-w-icon">
                                        <div class="info-block-w-icon">
                                            <div class="ci-icon">
                                                <i class="lnr lnr-pencil"></i>
                                            </div>
                                            <div class="ci-text">
                                                <h4>Copywriting</h4>
                                                <p>Pellentesque pellentesque, ipsum sit amet auctor accumsan, odio
                                                    tortor bibendum massa, sit amet ultricies ex lectus scelerisque
                                                    nibh. Ut non sodales.</p>
                                            </div>
                                        </div>
                                        <div class="info-block-w-icon">
                                            <div class="ci-icon">
                                                <i class="lnr lnr-flag"></i>
                                            </div>
                                            <div class="ci-text">
                                                <h4>Management</h4>
                                                <p>Pellentesque pellentesque, ipsum sit amet auctor accumsan, odio
                                                    tortor bibendum massa, sit amet ultricies ex lectus scelerisque
                                                    nibh. Ut non sodales.</p>
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
                                <h4>San Francisco</h4>
                                <span class="lm-info-block-value"></span>
                                <span class="lm-info-block-text"></span>
                            </div>

                            <div class="lm-info-block gray-default">
                                <i class="lnr lnr-phone-handset"></i>
                                <h4>415-832-2000</h4>
                                <span class="lm-info-block-value"></span>
                                <span class="lm-info-block-text"></span>
                            </div>

                            <div class="lm-info-block gray-default">
                                <i class="lnr lnr-envelope"></i>
                                <h4>alex@example.com</h4>
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
                        @livewire('contact-form')
                        <!-- End of Contact Form -->
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
