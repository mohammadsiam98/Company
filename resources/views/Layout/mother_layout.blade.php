<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="utf-8" />
    <title>Digital Marketing Company</title>
    <meta name="description" content="here we will add company description">
    <meta name="keywords" content="Creative Agency, Marketing Agency, Web Development Company, website developer in bangladesh, website development company in bangladesh, website development company, website developer dhaka, website developer near me, best website development company in bangladesh, top 10 web development company in bangladesh, web development company list in bangladesh">
    <meta name="author" content="servicearea">
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
                            <a href="{{route('aboutUs')}}" class="menu-links">
                                <img src="{{asset('assets/images/about.png')}}" alt=""> About Us</a>
                        </li>
                        <li class="sbmenu">
                            <a href="{{route('ourApproaches')}}" class="menu-links">
                                <img src="{{asset('assets/images/objective.png')}}" alt=""> Our Approaches</a>
                        </li>
                        <li class="sbmenu rpdropdown">
                            <a href="#" class="menu-links">
                                <img src="{{asset('assets/images/menu.png')}}" alt="" style="margin-right:10px;"> Sectors</a>
                            <div class="nx-dropdown menu-dorpdown">
                                <div class="sub-menu-section">
                                    <div class="sub-menu-center-block">
                                        <div class="sub-menu-column smfull">
                                            <ul>
                                                <li><a href="{{route('sectors','Website-Development')}}">
                                                        <img src="{{asset('assets/images/development.png')}}" alt="" style="margin-right:10px;"> Web Development</a></li>
                                                <li><a href="{{route('sectors','Web-Design')}}">
                                                        <img src="{{asset('assets/images/web-design.png')}}" alt="" style="margin-right:10px;"> Web Design</a></li>
                                                <li><a href="{{route('sectors','Graphics-Design')}}">
                                                        <img src="{{asset('assets/images/graphic-design.png')}}" alt="" style="margin-right:10px;"> Graphics Design</a> </li>
                                                <li><a href="{{route('sectors','App-Development')}}">
                                                        <img src="{{asset('assets/images/mobile-app.png')}}" alt="" style="margin-right:13px;">App Development</a> </li>
                                                <li><a href="{{route('sectors','Video-Editing')}}">
                                                        <img src="{{asset('assets/images/edit-video.png')}}" alt="" style="margin-right:13px;">Video Editing</a> </li>
                                                <li><a href="{{route('sectors','Search-Engine-Opimization')}}">
                                                        <img src="{{asset('assets/images/SEO.png')}}" alt="" style="margin-right:13px;">Search Engine Optimization</a></li>
                                                <li><a href="{{route('sectors','Social-Media- Marketing')}}">
                                                        <img src="{{asset('assets/images/bullhorn.png')}}" alt="" style="margin-right:13px;">Social Media Marketing</a> </li>
                                                <li><a href="{{route('sectors','Content-Writing')}}">
                                                        <img src="{{asset('assets/images/creative-writing.png')}}" alt="" style="margin-right:10px;"> Content Writing</a> </li>
                                                <li><a href="{{route('sectors','Software-Development')}}">
                                                        <img src="{{asset('assets/images/digital.png')}}" alt="" style="margin-right:10px;"> Software Development</a> </li>
                                                <li><a href="{{route('sectors','Animation')}}">
                                                        <img src="{{asset('assets/images/animate.png')}}" alt="" style="margin-right:13px;"> Animation</a> </li>
                                                <li><a href="{{route('sectors','Photography')}}">
                                                        <img src="{{asset('assets/images/photography.png')}}" alt="" style="margin-right:13px;"> Photography</a> </li>
                                                <li><a href="{{route('sectors','Cinematography')}}">
                                                        <img src="{{asset('assets/images/camera.png')}}" alt="" style="margin-right:13px;"> Cinematography</a> </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <a href="#" class="menu-links right-bddr">&nbsp;</a>
                        </li>
                        <!--menu right border-->
                        <li><a href="{{route('project-proposal')}}" class="btn-br bg-btn3 btshad-b2 lnk">
                                <img src="{{asset('assets/images/projectProposal.png')}}" alt=""> Project Proposal<span class="circle"></span></a> </li>

                        <li>
                            <a href="#" class="menu-links right-bddr">&nbsp;</a>
                        </li>


                        <!--menu right border-->
                        <li><a href="{{route('contact')}}" class="btn-br bg-btn3 btshad-b2 lnk">
                                <img src="{{asset('assets/images/contacts.png')}}" alt=""> Contact Us<span class="circle"></span></a>
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
                        <a href="{{route('ourApproaches')}}">
                            <img src="{{asset('assets/images/about.png')}}" alt="" style="margin-right:10px;"> About us</a>
                    </li>

                    <li>
                        <a href="{{route('ourApproaches')}}">
                            <img src="{{asset('assets/images/objective.png')}}" alt="" style="margin-right:10px;"> Our Approaches</a>
                    </li>

                    <li><a href="{{route('sectors','Website-Development')}}">
                            <img src="{{asset('assets/images/development.png')}}" alt="" style="margin-right:10px;"> Web Development</a></li>
                    <li><a href="{{route('sectors','Web-Design')}}">
                            <img src="{{asset('assets/images/web-design.png')}}" alt="" style="margin-right:10px;"> Web Design</a></li>
                    <li><a href="{{route('sectors','Graphics-Design')}}">
                            <img src="{{asset('assets/images/graphic-design.png')}}" alt="" style="margin-right:10px;"> Graphics Design</a> </li>
                    <li><a href="{{route('sectors','App-Development')}}">
                            <img src="{{asset('assets/images/mobile-app.png')}}" alt="" style="margin-right:13px;">App Development</a> </li>
                    <li><a href="{{route('sectors','Video-Editing')}}">
                            <img src="{{asset('assets/images/edit-video.png')}}" alt="" style="margin-right:13px;">Video Editing</a> </li>
                    <li><a href="{{route('sectors','Search-Engine-Opimization')}}">
                            <img src="{{asset('assets/images/SEO.png')}}" alt="" style="margin-right:13px;">Search Engine Optimization</a></li>
                    <li><a href="{{route('sectors','Social-Media- Marketing')}}">
                            <img src="{{asset('assets/images/bullhorn.png')}}" alt="" style="margin-right:13px;">Social Media Marketing</a> </li>
                    <li><a href="{{route('sectors','Content-Writing')}}">
                            <img src="{{asset('assets/images/creative-writing.png')}}" alt="" style="margin-right:10px;"> Content Writing</a> </li>
                    <li><a href="{{route('sectors','Software-Development')}}">
                            <img src="{{asset('assets/images/digital.png')}}" alt="" style="margin-right:10px;"> Software Development</a> </li>
                    <li><a href="{{route('sectors','Animation')}}">
                            <img src="{{asset('assets/images/animate.png')}}" alt="" style="margin-right:13px;"> Animation</a> </li>
                    <li><a href="{{route('sectors','Photography')}}">
                            <img src="{{asset('assets/images/photography.png')}}" alt="" style="margin-right:13px;"> Photography</a> </li>
                    <li><a href="{{route('sectors','Cinematography')}}">
                            <img src="{{asset('assets/images/camera.png')}}" alt="" style="margin-right:13px;"> Cinematography</a> </li>
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
                                <p>Email <span> <a href="https://separateweb.com/cdn-cgi/l/email-protection#5f363139301f3d2a2c36313a2c2c313e323a713c3032"><span class="__cf_email__" data-cfemail="620b0c040d220017110b0c0711110c030f074c010d0f"> <b>office@servicearea.xyz</b> </span></a></span></p>
                            </li>
                            <li>
                                <span><i class="fas fa-phone-alt"></i></span>
                                <p>Phone <span> <a href="tel:+10000000000"><b>01886453849</b></a></span></p>
                            </li>
                            <li>
                                <span><i class="fas fa-map-marker-alt"></i></span>
                                <p>Address <span> <b>202/3/ka, Dhanmondi 19 no: Modhubazar, Dhaka - 1209</b> </span></p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <h5>Other Links</h5>
                        <ul class="footer-address-list link-hover">
                            <li><a href="{{route('aim')}}"> <b>Mission Vission</b></a></li>
                            <li><a href="{{route('caseStudy')}}"> <b>Case Study</b></a></li>

                            <li><a href="{{route('reviews')}}"> <b>Client Reviews</b> </a></li>
                            <li><a href="{{route('team')}}"> <b>Our Team</b> </a></li>

                        </ul>
                    </div>
                    <div class="col-lg-4 col-sm-6 footer-blog-">
                        <h5>Our Blog Website</h5>
                        <ul class="footer-address-list link-hover">
                            <li><a href="{{route('aim')}}"> <b>blog.servicearea.xyz</b></a></li>
                        </ul>

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
                                <p>&copy; <b>Servicearea 2021.</b> All rights reserved.</p>
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
