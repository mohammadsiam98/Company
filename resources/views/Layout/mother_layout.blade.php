<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="utf-8" />
    <title>Niwax - Web Design &amp; Digital Marketing Agency HTML Template</title>
    <meta name="description" content="Creative Agency, Marketing Agency Template">
    <meta name="keywords" content="Creative Agency, Marketing Agency">
    <meta name="author" content="rajesh-doot">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#2e2a8f">
    <!--website-favicon-->
    <link href="{{asset('assets/images/favicon.png')}}" rel="icon">
    <!--plugin-css-->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/plugin.min.css')}}" rel="stylesheet">
    <link href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <!-- template-style-->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">
</head>
<body>
    <!--Start Preloader -->
    <div class="onloadpage" id="page_loader">
        <div class="pre-content">
            <div class="logo-pre"><img src="{{asset('assets/images/logo.png')}}" alt="Logo" class="img-fluid" /></div>
            <div class="pre-text- text-radius text-light text-animation bg-b">Niwax - Creative Agency & Portfolio HTML Template Are 2 Seconds Away. Have Patience</div>
        </div>
    </div>
    <!--End Preloader -->
    <!--Start Header -->
    <header class="header-pr nav-bg-b main-header navfix fixed-top menu-white">
        <div class="container-fluid m-pad">
            <div class="menu-header">
                <div class="dsk-logo"><a class="nav-brand" href="{{route('homepage')}}">
                        <img src="{{asset('assets/images/white-logo.png')}}" alt="Logo" class="mega-white-logo" />
                        <img src="{{asset('assets/images/logo.png')}}" alt="Logo" class="mega-darks-logo" />
                    </a>
                </div>
                <div class="custom-nav" role="navigation">
                    <ul class="nav-list">
                        <li class="sbmenu">
                            <a href="{{route('aboutUs')}}" class="menu-links">About Us</a>
                        </li>
                        <li class="sbmenu">
                            <a href="{{route('ourApproaches')}}" class="menu-links">Our Approaches</a>
                        </li>
                        <li class="sbmenu">
                            <a href="{{route('blog')}}" class="menu-links">blog</a>
                        </li>

                        <li class="sbmenu rpdropdown">
                            <a href="{{route('sector')}}" class="menu-links">Services</a>
                        </li>

                        <li>
                            <a href="#" class="menu-links right-bddr">&nbsp;</a>
                            <!--menu right border-->
                        <li><a href="{{route('contact')}}" class="btn-br bg-btn3 btshad-b2 lnk">Request A Quote <span class="circle"></span></a> </li>
                    </ul>
                </div>
                <div class="mobile-menu2">
                    <ul class="mob-nav2">
                        <li><a href="#" class="btn-round- trngl btn-br bg-btn btshad-b1" data-toggle="modal" data-target="#menu-popup"><i class="fas fa-envelope-open-text"></i></a></li>
                        <li class="navm-"> <a class="toggle" href="#"><span></span></a></li>
                    </ul>
                </div>
            </div>
            <!--Mobile Menu-->
            <nav id="main-nav">
                <ul class="first-nav">
                    <li>
                        <a href="{{route('aboutUs')}}">About Us</a>
                    </li>
                    <li>
                        <a href="{{route('ourApproaches')}}">Our Approaches</a>
                    </li>
                    <li>
                        <a href="{{route('blog')}}">Blog</a>
                    </li>
                    <li>
                        <a href="{{route('sector')}}">Services</a>
                    </li>
                </ul>
                <ul class="bottom-nav">
                    <li class="prb">
                        <a href="tel:+11111111111">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 384">
                                <path d="M353.188,252.052c-23.51,0-46.594-3.677-68.469-10.906c-10.719-3.656-23.896-0.302-30.438,6.417l-43.177,32.594
                              c-50.073-26.729-80.917-57.563-107.281-107.26l31.635-42.052c8.219-8.208,11.167-20.198,7.635-31.448
                              c-7.26-21.99-10.948-45.063-10.948-68.583C132.146,13.823,118.323,0,101.333,0H30.813C13.823,0,0,13.823,0,30.813
                              C0,225.563,158.438,384,353.188,384c16.99,0,30.813-13.823,30.813-30.813v-70.323C384,265.875,370.177,252.052,353.188,252.052z" />
                            </svg>
                        </a>
                    </li>
                    <li class="prb">
                        <a href="https://separateweb.com/cdn-cgi/l/email-protection#bac9d5d7dfcddfd8d7dfded3dbfaddd7dbd3d694d9d5d7">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                                <path d="M0 0h24v24H0z" fill="none" />
                            </svg>
                        </a>
                    </li>
                    <li class="prb">
                        <a href="skype:niwax.company?call">
                            <svg enable-background="new 0 0 24 24" height="18" viewBox="0 0 24 24" width="18" xmlns="http://www.w3.org/2000/svg">
                                <path d="m23.309 14.547c1.738-7.81-5.104-14.905-13.139-13.543-4.362-2.707-10.17.352-10.17 5.542 0 1.207.333 2.337.912 3.311-1.615 7.828 5.283 14.821 13.311 13.366 5.675 3.001 11.946-2.984 9.086-8.676zm-7.638 4.71c-2.108.867-5.577.872-7.676-.227-2.993-1.596-3.525-5.189-.943-5.189 1.946 0 1.33 2.269 3.295 3.194.902.417 2.841.46 3.968-.3 1.113-.745 1.011-1.917.406-2.477-1.603-1.48-6.19-.892-8.287-3.483-.911-1.124-1.083-3.107.037-4.545 1.952-2.512 7.68-2.665 10.143-.768 2.274 1.76 1.66 4.096-.175 4.096-2.207 0-1.047-2.888-4.61-2.888-2.583 0-3.599 1.837-1.78 2.731 2.466 1.225 8.75.816 8.75 5.603-.005 1.992-1.226 3.477-3.128 4.253z" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <!--Mobile contact-->
    <div class="popup-modal1">
        <div class="modal" id="menu-popup">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="common-heading">
                            <h4 class="mt0 mb0">Write a Message</h4>
                        </div>
                        <button type="button" class="closes" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="form-block fdgn2 mt10 mb10">
                            <form action="#" method="post" name="feedback-form">
                                <div class="fieldsets row">
                                    <div class="col-md-12"><input type="text" placeholder="Full Name" name="name"></div>
                                    <div class="col-md-12"><input type="email" placeholder="Email Address" name="email"></div>
                                    <div class="col-md-12"><input type="number" placeholder="Contact Number" name="phone"></div>
                                    <div class="col-md-12"><input type="text" placeholder="Subject" name="subject"></div>
                                    <div class="col-md-12"><textarea placeholder="Message" name="message"></textarea></div>
                                </div>
                                <div class="fieldsets mt20 pb20">
                                    <button type="submit" name="submit" class="lnk btn-main bg-btn" data-dismiss="modal">Submit <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Mobile contact-->
    <!--End Header -->

    @yield('content')

    <!--Start Footer-->
    <footer>
        <div class="footer-row1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="email-subs">
                            <h3>Get New Insights Weekly</h3>
                            <p>News letter dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Enter your email</p>
                        </div>
                    </div>
                    <div class="col-lg-6 v-center">
                        <div class="email-subs-form">
                            <form>
                                <input type="email" placeholder="Email Your Address" name="emails">
                                <button type="submit" name="submit" class="lnk btn-main bg-btn">Subscribe <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-row2">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-3 col-sm-6  ftr-brand-pp">
                        <a class="navbar-brand mt30 mb25" href="#"> <img src="{{asset('assets/images/logo.png')}}" alt="Logo" width="100" /></a>
                        <p>News letter dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Enter your email</p>
                        <a href="{{route('contact')}}" class="btn-main bg-btn3 lnk mt20">Contact Us<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h5>Contact Us</h5>
                        <ul class="footer-address-list ftr-details">
                            <li>
                                <span><i class="fas fa-envelope"></i></span>
                                <p>Email <span> <a href="https://separateweb.com/cdn-cgi/l/email-protection#5f363139301f3d2a2c36313a2c2c313e323a713c3032"><span class="__cf_email__" data-cfemail="620b0c040d220017110b0c0711110c030f074c010d0f">[email&#160;protected]</span></a></span></p>
                            </li>
                            <li>
                                <span><i class="fas fa-phone-alt"></i></span>
                                <p>Phone <span> <a href="tel:+10000000000">+1 0000 000 000</a></span></p>
                            </li>
                            <li>
                                <span><i class="fas fa-map-marker-alt"></i></span>
                                <p>Address <span> 123 Business Centre London SW1A 1AA</span></p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <h5>Other Links</h5>
                        <ul class="footer-address-list link-hover">
                            <li><a href="{{route('aim')}}">Mission Vission</a></li>
                            <li><a href="{{route('caseStudy')}}">Case Study</a></li>
                            <li><a href="{{route('office')}}">Our Office</a></li>
                            <li><a href="{{route('reviews')}}">Client Reviews</a></li>
                            <li><a href="{{route('team')}}">Our Team</a></li>

                        </ul>
                    </div>
                    <div class="col-lg-4 col-sm-6 footer-blog-">
                        <h5>Latest Blogs</h5>
                        <div class="single-blog-">
                            <div class="post-thumb"><a href="#"><img src="images/blog/blog-small.jpg" alt="blog"></a></div>
                            <div class="content">
                                <p class="post-meta"><span class="post-date"><i class="far fa-clock"></i>April 15, 2020</span></p>
                                <h4 class="title"><a href="blog-sngle.html">We Provide you Best &amp; Creative Consulting Service</a></h4>
                            </div>
                        </div>
                        <div class="single-blog-">
                            <div class="post-thumb"><a href="#"><img src="images/blog/blog-small.jpg" alt="blog"></a></div>
                            <div class="content">
                                <p class="post-meta"><span class="post-date"><i class="far fa-clock"></i>April 15, 2020</span></p>
                                <h4 class="title"><a href="blog-sngle.html">We Provide you Best &amp; Creative Consulting Service</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-row3">
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer-social-media-icons">
                                <a href="javascript:void(0)" target="blank"><i class="fab fa-facebook"></i></a>
                                <a href="javascript:void(0)" target="blank"><i class="fab fa-twitter"></i></a>
                                <a href="javascript:void(0)" target="blank"><i class="fab fa-instagram"></i></a>
                                <a href="javascript:void(0)" target="blank"><i class="fab fa-linkedin"></i></a>
                                <a href="javascript:void(0)" target="blank"><i class="fab fa-youtube"></i></a>
                                <a href="javascript:void(0)" target="blank"><i class="fab fa-pinterest-p"></i></a>
                                <a href="javascript:void(0)" target="blank"><i class="fab fa-vimeo-v"></i></a>
                                <a href="javascript:void(0)" target="blank"><i class="fab fa-dribbble"></i></a>
                                <a href="javascript:void(0)" target="blank"><i class="fab fa-behance"></i></a>
                            </div>
                            <div class="footer-">
                                <p>Copyright &copy; 2020 Niwax. All rights reserved. Template By <a href="https://themeforest.net/user/rajesh-doot/portfolio" target="blank">Rajesh Doot</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--End Footer-->
    <!-- js placed at the end of the document so the pages load faster -->
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{asset('assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/plugin.min.js')}}"></script>
    <script src="{{asset('assets/js/preloader.js')}}"></script>
    <!--common script file-->
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>
