<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Andrew Atkinson - {{$experiences->first()->title}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content="BreezyCV - Resume / CV / vCard Template"/>
    <meta name="keywords" content="vcard, resposnive, retina, resume, jquery, css3, bootstrap, Material CV, portfolio"/>
    <meta name="author" content="lmpixels"/>
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

                        <!-- Testimonials -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <div class="block-title">
                                    <h3>Testimonials</h3>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <div class="testimonials owl-carousel">
                                    <!-- Testimonial 1 -->
                                    <div class="testimonial">
                                        <div class="img">
                                            <img src="img/testimonials/testimonial-1.jpg" alt="Andrew Atkinson">
                                        </div>
                                        <div class="text">
                                            <p>Vivamus at molestie dui, eu ornare orci. Curabitur vel egestas dolor.
                                                Nulla condimentum nunc sit amet urna tempus finibus. Duis mollis leo id
                                                ligula pellentesque, at vehicula dui ultrices.</p>
                                        </div>

                                        <div class="author-info">
                                            <h4 class="author">Julia Hickman</h4>
                                            <h5 class="company">Omni Source</h5>
                                            <div class="icon">
                                                <i class="fas fa-quote-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Testimonial 1 -->

                                    <!-- Testimonial 2 -->
                                    <div class="testimonial">
                                        <div class="img">
                                            <img src="img/testimonials/testimonial-2.jpg" alt="Andrew Atkinson">
                                        </div>
                                        <div class="text">
                                            <p>Vivamus at molestie dui, eu ornare orci. Curabitur vel egestas dolor.
                                                Nulla condimentum nunc sit amet urna tempus finibus. Duis mollis leo id
                                                ligula pellentesque, at vehicula dui ultrices.</p>
                                        </div>

                                        <div class="author-info">
                                            <h4 class="author">Robert Watkins</h4>
                                            <h5 class="company">Endicott Shoes</h5>
                                            <div class="icon">
                                                <i class="fas fa-quote-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Testimonial 2 -->

                                    <!-- Testimonial 3 -->
                                    <div class="testimonial">
                                        <div class="img">
                                            <img src="img/testimonials/testimonial-3.jpg" alt="Andrew Atkinson">
                                        </div>
                                        <div class="text">
                                            <p>Vivamus at molestie dui, eu ornare orci. Curabitur vel egestas dolor.
                                                Nulla condimentum nunc sit amet urna tempus finibus. Duis mollis leo id
                                                ligula pellentesque, at vehicula dui ultrices.</p>
                                        </div>

                                        <div class="author-info">
                                            <h4 class="author">Kristin Carroll</h4>
                                            <h5 class="company">Helping Hand</h5>
                                            <div class="icon">
                                                <i class="fas fa-quote-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Testimonial 3 -->
                                </div>
                            </div>
                        </div>
                        <!-- End of Testimonials -->

                        <div class="white-space-50"></div>

                        <!-- Clients -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <div class="block-title">
                                    <h3>Cilents</h3>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <div class="clients owl-carousel">

                                    <div class="client-block">
                                        <a href="#" target="_blank" title="Logo">
                                            <img src="img/clients/client-1.png" alt="Logo">
                                        </a>
                                    </div>

                                    <div class="client-block">
                                        <a href="#" target="_blank" title="Logo">
                                            <img src="img/clients/client-2.png" alt="Logo">
                                        </a>
                                    </div>

                                    <div class="client-block">
                                        <a href="#" target="_blank" title="Logo">
                                            <img src="img/clients/client-3.png" alt="Logo">
                                        </a>
                                    </div>

                                    <div class="client-block">
                                        <a href="#" target="_blank" title="Logo">
                                            <img src="img/clients/client-4.png" alt="Logo">
                                        </a>
                                    </div>

                                    <div class="client-block">
                                        <a href="#" target="_blank" title="Logo">
                                            <img src="img/clients/client-5.png" alt="Logo">
                                        </a>
                                    </div>

                                    <div class="client-block">
                                        <a href="#" target="_blank" title="Logo">
                                            <img src="img/clients/client-6.png" alt="Logo">
                                        </a>
                                    </div>

                                    <div class="client-block">
                                        <a href="#" target="_blank" title="Logo">
                                            <img src="img/clients/client-7.png" alt="Logo">
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- End of Clients -->

                        <div class="white-space-50"></div>

                        <!-- Pricing -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">

                                <div class="block-title">
                                    <h3>Pricing</h3>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class=" col-xs-12 col-sm-12 ">
                                <div class="fw-pricing clearfix row">

                                    <div class="fw-package-wrap col-md-6 ">
                                        <div class="fw-package">
                                            <div class="fw-heading-row">
                                                <span>Silver</span>
                                            </div>

                                            <div class="fw-pricing-row">
                                                <span>$64</span>
                                                <small>per month</small>
                                            </div>

                                            <div class="fw-button-row">
                                                <a href="#" target="_self" class="btn btn-secondary">Free Trial</a>
                                            </div>

                                            <div class="fw-default-row">Lorem ipsum dolor</div>
                                            <div class="fw-default-row">Pellentesque scelerisque</div>
                                            <div class="fw-default-row">Morbi eu sagittis</div>
                                        </div>
                                    </div>

                                    <div class="fw-package-wrap col-md-6 highlight-col ">
                                        <div class="fw-package">
                                            <div class="fw-heading-row">
                                                <span>Gold</span>
                                            </div>

                                            <div class="fw-pricing-row">
                                                <span>$128</span>
                                                <small>per month</small>
                                            </div>

                                            <div class="fw-button-row">
                                                <a href="#" target="_self" class="btn btn-primary">Free Trial</a>
                                            </div>

                                            <div class="fw-default-row">Lorem ipsum dolor</div>
                                            <div class="fw-default-row">Pellentesque scelerisque</div>
                                            <div class="fw-default-row">Morbi eu sagittis</div>
                                            <div class="fw-default-row">Donec non diam</div>
                                            <div class="fw-default-row"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- End of Pricing -->

                        <div class="white-space-50"></div>

                        <!-- Fun Facts -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">

                                <div class="block-title">
                                    <h3>Fun <span>Facts</span></h3>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-4">
                                <div class="fun-fact gray-default">
                                    <i class="lnr lnr-heart"></i>
                                    <h4>Happy Clients</h4>
                                    <span class="fun-fact-block-value">578</span>
                                    <span class="fun-fact-block-text"></span>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-4">
                                <div class="fun-fact gray-default">
                                    <i class="lnr lnr-clock"></i>
                                    <h4>Working Hours</h4>
                                    <span class="fun-fact-block-value">4,780</span>
                                    <span class="fun-fact-block-text"></span>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-4 ">
                                <div class="fun-fact gray-default">
                                    <i class="lnr lnr-star"></i>
                                    <h4>Awards Won</h4>
                                    <span class="fun-fact-block-value">15</span>
                                    <span class="fun-fact-block-text"></span>
                                </div>
                            </div>
                        </div>
                        <!-- End of Fun Facts -->

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

                            <!-- Knowledges -->
                            <div class="block-title">
                                <h3>Knowledges</h3>
                            </div>

                            <ul class="knowledges">
                                <li>Marketing</li>
                                <li>Print</li>
                                <li>Digital Design</li>
                                <li>Social Media</li>
                                <li>Time Management</li>
                                <li>Communication</li>
                                <li>Problem-Solving</li>
                                <li>Social Networking</li>
                                <li>Flexibility</li>
                            </ul>
                            <!-- End of Knowledges -->
                        </div>
                        <!-- End of Skills & Certificates -->
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
                        <div class="col-xs-12 col-sm-8">
                            <div class="lmpixels-map">
                                <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            </div>
                            <div class="block-title">
                                <h3>How Can I <span>Help You?</span></h3>
                            </div>

                            <form id="contact_form" class="contact-form" action="contact_form/contact_form.php"
                                  method="post">

                                <div class="messages"></div>

                                <div class="controls two-columns">
                                    <div class="fields clearfix">
                                        <div class="left-column">
                                            <div class="form-group form-group-with-icon">
                                                <input id="form_name" type="text" name="name" class="form-control"
                                                       placeholder="" required="required"
                                                       data-error="Name is required.">
                                                <label>Full Name</label>
                                                <div class="form-control-border"></div>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-group form-group-with-icon">
                                                <input id="form_email" type="email" name="email" class="form-control"
                                                       placeholder="" required="required"
                                                       data-error="Valid email is required.">
                                                <label>Email Address</label>
                                                <div class="form-control-border"></div>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-group form-group-with-icon">
                                                <input id="form_subject" type="text" name="subject" class="form-control"
                                                       placeholder="" required="required"
                                                       data-error="Subject is required.">
                                                <label>Subject</label>
                                                <div class="form-control-border"></div>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="right-column">
                                            <div class="form-group form-group-with-icon">
                                                <textarea id="form_message" name="message" class="form-control"
                                                          placeholder="" rows="7" required="required"
                                                          data-error="Please, leave me a message."></textarea>
                                                <label>Message</label>
                                                <div class="form-control-border"></div>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="g-recaptcha" data-sitekey="6LdqmCAUAAAAAMMNEZvn6g4W5e0or2sZmAVpxVqI"
                                         data-theme="dark"></div>

                                    <input type="submit" class="button btn-send" value="Send message">
                                </div>
                            </form>
                        </div>
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

<script src="js/validator.js"></script>
<script src="js/main.js"></script>
</body>
</html>
