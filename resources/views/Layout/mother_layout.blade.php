<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="utf-8" />
    <title>Digital Marketing Company</title>
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
    {{-- <!--Start Preloader -->
    <div class="onloadpage" id="page_loader">
        <div class="pre-content">
            <div class="logo-pre"><img src="{{asset('assets/images/logo.png')}}" alt="Logo" class="img-fluid" /></div>
    <div class="pre-text- text-radius text-light text-animation bg-b">Niwax - Creative Agency & Portfolio HTML Template Are 2 Seconds Away. Have Patience</div>
    </div>
    </div>
    <!--End Preloader --> --}}
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
                            <a href="{{route('ourApproaches',1)}}" class="menu-links">Our Approaches</a>
                        </li>
                        <li class="sbmenu rpdropdown">
                            <a href="#" class="menu-links">Sectors</a>
                            <div class="nx-dropdown menu-dorpdown">
                                <div class="sub-menu-section">
                                    <div class="sub-menu-center-block">
                                        <div class="sub-menu-column smfull">
                                            <ul>
                                                <li><a href="{{route('sectors',1)}}">Web Development</a></li>
                                                <li><a href="{{route('sectors',13)}}">Web Design</a></li>
                                                <li><a href="{{route('sectors',3)}}">Graphics Design</a> </li>
                                                <li><a href="{{route('sectors',4)}}">App Development</a> </li>
                                                <li><a href="{{route('sectors',5)}}">Video Editing</a> </li>
                                                <li><a href="{{route('sectors',6)}}">Search Engine Optimization</a> </li>
                                                <li><a href="{{route('sectors',7)}}">Social Media Marketing</a> </li>
                                                <li><a href="{{route('sectors',8)}}">Content Writing</a> </li>
                                                <li><a href="{{route('sectors',9)}}">Software Development</a> </li>
                                                <li><a href="{{route('sectors',10)}}">Animation</a> </li>
                                                <li><a href="{{route('sectors',11)}}">Photography</a> </li>
                                                <li><a href="{{route('sectors',12)}}">Cinematography</a> </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        {{-- <li class="sbmenu rpdropdown">
                            <a href="{{route('notunNam')}}" class="menu-links">Services</a>
                        </li> --}}
                        <li>
                            <a href="#" class="menu-links right-bddr">&nbsp;</a>
                            <!--menu right border-->
                        <li><a href="{{route('project-proposal')}}" class="btn-br bg-btn3 btshad-b2 lnk">Project Proposal<span class="circle"></span></a> </li>

                        <li>
                            <a href="#" class="menu-links right-bddr">&nbsp;</a>
                            <!--menu right border-->
                        <li><a href="{{route('contact')}}" class="btn-br bg-btn3 btshad-b2 lnk">Contact Us<span class="circle"></span></a>
                        </li>
                    </ul>
                </div>
                <div class="mobile-menu2">
                    <ul class="mob-nav2">
                        <li class="navm-"> <a class="toggle" href="#"><span></span></a></li>
                    </ul>
                </div>
            </div>
            <!--Mobile Menu-->
            <nav id="main-nav">
                <ul class="first-nav">
                    <li>
                        <a href="{{route('aboutUs')}}" style="font-size: 18px;">About Us</a>
                    </li>
                    <li>
                        <a href="{{route('ourApproaches',1)}}" style="font-size: 18px;">Our Approaches</a>
                    </li>



                </ul>
                <ul class="bottom-nav">
                    <li class="prb">
                        <a href="tel:01886453849">
                            <img src="{{asset('assets/images/call.png')}}" alt="">
                        </a>
                    </li>
                    <li class="prb">
                        <a href="mail:mohammadalaminsiam@gmail.com">
                            <img src="{{asset('assets/images/mailing.png')}}" alt="">
                        </a>
                    </li>
                    <li class="prb">
                        <a href="">
                            <img src="{{asset('assets/images/skype.png')}}" alt="">
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

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
