@extends('Layout.mother_layout')
@section('content')

<!--Start Hero-->
<section class="hero-card-web bg-gradient12 shape-bg3">
    <div class="hero-main-rp container-fluid">
        <div class="row">
            <div class="col-lg-5">
                <div class="hero-heading-sec2">
                    <h1 class="wow fadeIn" data-wow-delay="0.2s">Digital Creative Agency</h1>
                    <p class="wow fadeIn" data-wow-delay="0.4s">Niwax is one of the most creative and experienced mobile app development companies in India.</p>
                    <a href="case-study.html" class="btn-main bg-btn lnk wow fadeIn" data-wow-delay="0.8s">View Case Studies <i class="fas fa-chevron-right fa-ani"></i><span class="circle"></span></a>
                    <div class="awards-block-tt  wow fadeIn" data-wow-delay="1s"><img src="{{asset('assets/images/hero/awards-logo.png')}}" alt="awards-logo" class="img-fluid" /></div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="hero-right-scmm">
                    <div class="hero-service-cards wow fadeInRight" data-wow-duration="2s">
                        <div class="owl-carousel service-card-prb">
                            <div class="service-slide card-bg-a" data-tilt data-tilt-max="5" data-tilt-speed="1000">
                                <a href="#">
                                    <div class="service-card-hh">
                                        <div class="image-sr-mm">
                                            <img alt="custom-sport" src="{{asset('assets/images/service/vr.png')}}">
                                        </div>
                                        <div class="title-serv-c"><span>VR</span> Solution</div>
                                    </div>
                                </a>
                            </div>
                            <div class="service-slide card-bg-b" data-tilt data-tilt-max="5" data-tilt-speed="1000">
                                <a href="#">
                                    <div class="service-card-hh">
                                        <div class="image-sr-mm">
                                            <img alt="custom-sport" src="{{asset('assets/images/service/app-develop.png')}}">
                                        </div>
                                        <div class="title-serv-c"><span>Custom</span> App Solution</div>
                                    </div>
                                </a>
                            </div>
                            <div class="service-slide card-bg-c" data-tilt data-tilt-max="5" data-tilt-speed="1000">
                                <a href="#">
                                    <div class="service-card-hh">
                                        <div class="image-sr-mm">
                                            <img alt="custom-sport" src="{{asset('assets/images/service/startup.png')}}">
                                        </div>
                                        <div class="title-serv-c"><span>Startup</span> Solution</div>
                                    </div>
                                </a>
                            </div>
                            <div class="service-slide card-bg-d" data-tilt data-tilt-max="5" data-tilt-speed="1000">
                                <a href="#">
                                    <div class="service-card-hh">
                                        <div class="image-sr-mm">
                                            <img alt="custom-sport" src="{{asset('assets/images/service/car-rental.png')}}">
                                        </div>
                                        <div class="title-serv-c"><span>Car</span> Rental Solution</div>
                                    </div>
                                </a>
                            </div>
                            <div class="service-slide card-bg-e" data-tilt data-tilt-max="5" data-tilt-speed="1000">
                                <a href="#">
                                    <div class="service-card-hh">
                                        <div class="image-sr-mm">
                                            <img alt="custom-sport" src="{{asset('assets/images/service/marketing.png')}}">
                                        </div>
                                        <div class="title-serv-c"><span>Marketing</span> Solution</div>
                                    </div>
                                </a>
                            </div>
                            <div class="service-slide card-bg-f" data-tilt data-tilt-max="5" data-tilt-speed="1000">
                                <a href="#">
                                    <div class="service-card-hh">
                                        <div class="image-sr-mm">
                                            <img alt="custom-sport" src="{{asset('assets/images/service/ewallet.png')}}">
                                        </div>
                                        <div class="title-serv-c"><span>e-Wallet</span> Solution</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Hero-->

<!--Start About-->
<section class="about-sec-rpb pad-tb">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-10">
                <div class="common-heading">
                    <span>We Are Creative Agency</span>
                    <h1 class="mb30"><span class="text-second">Top-rated</span> Web And Mobile App Development Company</h1>
                    <p>Lorem Ipsum is <span class="text-radius text-light text-animation bg-b">simply dummy</span> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                        specimen book. <span class="text-bold">Lorem Ipsum</span> is simply dummy text of the printing and typesetting industry. <span class="text-bold">Lorem Ipsum </span> is simply dummy text of the printing and typesetting industry.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End About-->


<!--Start Service-->
<section class="service-section-prb pad-tb">
    <div class="container">
        <div class="row upset">
            <div data-tilt data-tilt-max="5" data-tilt-speed="1000" class="col-lg-6-cus wow fadeInUp" data-wow-delay=".2s">
                <div class="service-sec-brp srvc-bg-nx bg-gradient13 text-w">
                    <h4 class="mb10">INTEGRATED SERVICES</h4>
                    <p>Lorem Ipsum is text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500.</p>
                    <a href="javascript:void(0)" class="mt20 link-prb">Learn More <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
            <div data-tilt data-tilt-max="5" data-tilt-speed="1000" class="col-lg-3-cus wow fadeInUp" data-wow-delay=".4s">
                <div class="service-sec-list srvc-bg-nx srcl1">
                    <img src="{{asset('assets/images/icons/development.svg')}}" alt="service">
                    <h5 class="mb10">Web Development</h5>
                    <ul class="-service-list">
                        <li> <a href="#">PHP</a> </li>
                        <li> <a href="#"><strong>.</strong>Net</a> </li>
                        <li> <a href="#">Java</a> </li>
                        <li> <a href="#">Joomla</a></li>
                    </ul>
                    <p>Lorem Ipsum is text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500.</p>
                </div>
            </div>
            <div data-tilt data-tilt-max="5" data-tilt-speed="1000" class="col-lg-3-cus wow fadeInUp" data-wow-delay=".6s">
                <div class="service-sec-list srvc-bg-nx srcl2">
                    <img src="{{asset('assets/images/icons/ecommerce.svg')}}" alt="service">
                    <h5 class="mb10">Ecommerce Development</h5>
                    <ul class="-service-list">
                        <li> <a href="#">Magento </a> </li>
                        <li> <a href="#">WP</a> </li>
                        <li> <a href="#">Shopify </a> </li>
                        <li> <a href="#">Joomla</a></li>
                    </ul>
                    <p>Lorem Ipsum is text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500.</p>
                </div>
            </div>
            <div data-tilt data-tilt-max="5" data-tilt-speed="1000" class="col-lg-3-cus mt30- wow fadeInUp" data-wow-delay=".8s">
                <div class="service-sec-list srvc-bg-nx srcl3">
                    <img src="{{asset('assets/images/icons/app.svg')}}" alt="service">
                    <h5 class="mb10">Mobile App Development</h5>
                    <ul class="-service-list">
                        <li> <a href="#">iPhone </a> </li>
                        <li> <a href="#">Android</a> </li>
                        <li> <a href="#">Cross Platform </a></li>
                    </ul>
                    <p>Lorem Ipsum is text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500.</p>
                </div>
            </div>
            <div data-tilt data-tilt-max="5" data-tilt-speed="1000" class="col-lg-3-cus mt30- wow fadeInUp" data-wow-delay="1s">
                <div class="service-sec-list srvc-bg-nx srcl4">
                    <img src="{{asset('assets/images/icons/tech.svg')}}" alt="service">
                    <h5 class="mb10">Trending Technologies</h5>
                    <ul class="-service-list">
                        <li> <a href="#">React.JS </a> </li>
                        <li> <a href="#">Node.JS </a> </li>
                        <li> <a href="#"> Angular.JS </a></li>
                    </ul>
                    <p>Lorem Ipsum is text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500.</p>
                </div>
            </div>
            <div data-tilt data-tilt-max="5" data-tilt-speed="1000" class="col-lg-6-cus mt30- wow fadeInUp" data-wow-delay="1.2s">
                <div class="service-sec-list srvc-bg-nx srcl5">
                    <img src="{{asset('assets/images/icons/seo.svg')}}" alt="service">
                    <h5 class="mb10">Digital Marketing</h5>
                    <ul class="-service-list">
                        <li> <a href="#">SEO </a> </li>
                        <li> <a href="#">SMO </a> </li>
                        <li> <a href="#">PPC </a></li>
                        <li> <a href="#">PPC </a></li>
                    </ul>
                    <p>Lorem Ipsum is text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500.</p>
                </div>
            </div>
        </div>
        <div class="-cta-btn mt70">
            <div class="free-cta-title v-center zoomInDown wow" data-wow-delay="1.4s">
                <p>Hire a <span>Dedicated Developer</span></p>
                <a href="#" class="btn-main bg-btn2 lnk">Hire Now<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
            </div>
        </div>
    </div>
</section>
<!--End Service-->


<!--Start statistics-->
<div class="statistics-section bg-gradient6 pad-tb tilt3d">
    <div class="container">
        <div class="row justify-content-center t-ctr">
            <div class="col-lg-3 col-sm-6">
                <div class="statistics">
                    <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
                        <img src="{{asset('assets/images/icons/startup.svg')}}" alt="years" class="img-fluid" />
                    </div>
                    <div class="statnumb">
                        <span class="counter">15</span><span>+</span>
                        <p>Year In Business</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="statistics">
                    <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
                        <img src="{{asset('assets/images/icons/team.svg')}}" alt="team" class="img-fluid" />
                    </div>
                    <div class="statnumb">
                        <span class="counter">80</span><span>+</span>
                        <p>Team Members</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="statistics">
                    <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
                        <img src="{{asset('assets/images/icons/team.svg')}}" alt="team" class="img-fluid" />
                    </div>
                    <div class="statnumb">
                        <span class="counter">80</span><span>+</span>
                        <p>Team Members</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="statistics">
                    <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
                        <img src="{{asset('assets/images/icons/team.svg')}}" alt="team" class="img-fluid" />
                    </div>
                    <div class="statnumb">
                        <span class="counter">80</span><span>+</span>
                        <p>Team Members</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End statistics-->


<!--why choose-->
<section class="why-choos-lg pad-tb deep-dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12 col-md-12">
                <div class="common-heading text-l">
                    <h2><span class="text-second text-bold">Why Choose Us</span></h2>
                    <h4 class="mb20">Our Company<span class="text-second text-bold"> Salahuddinit </span> Among The Leading Web & App Development Companies</h4>
                    <div class="itm-media-object mt40 tilt-3d">
                        <div class="media">
                            <div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"><img src="{{asset('assets/images/icons/computers.svg')}}" alt="icon" class="layer"></div>
                            <div class="media-body">
                                <h4>Streamlined Project Management</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet ligula nec leo elementum semper. Mauris aliquet egestas metus.</p>
                            </div>
                        </div>
                        <div class="media mt40">
                            <div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"><img src="{{asset('assets/images/icons/worker.svg')}}" alt="icon" class="layer"></div>
                            <div class="media-body">
                                <h4>A Dedicated Team of Experts</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet ligula nec leo elementum semper. Mauris aliquet egestas metus.</p>
                            </div>
                        </div>
                        <div class="media mt40">
                            <div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"> <img src="{{asset('assets/images/icons/deal.svg')}}" alt="icon" class="layer"></div>
                            <div class="media-body">
                                <h4>Completion of Project in Given Time</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet ligula nec leo elementum semper. Mauris aliquet egestas metus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div data-tilt data-tilt-max="5" data-tilt-speed="1000" class="single-image bg-shape-dez wow fadeIn" data-wow-duration="2s"><img src="{{asset('assets/images/company.png')}}" alt="image" class="img-fluid"></div>
                <p class="text-center mt30">Lorem Ipsum is simply dummy text of the printing and typesetting industry..</p>
                <div class="cta-card mt60 text-center">
                </div>
            </div>
        </div>
    </div>
</section>
<!--End why choose-->


<!--Start Portfolio-->
<section class="portfolio-section pad-tb">
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-lg-8">
                <div class="common-heading">
                    <span>Our Work</span>
                    <h2 class="mb0">Our Latest Creative Work</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-8 mt60 wow fadeInUp" data-wow-delay="0.2s">
                <div class="isotope_item hover-scale">
                    <div class="item-image" data-tilt data-tilt-max="2" data-tilt-speed="1000">
                        <a href="#"><img src="{{asset('assets/images/portfolio/image-d.jpg')}}" alt="image" class="img-fluid" /> </a>
                    </div>
                    <div class="item-info">
                        <h4><a href="#">Ecommerce Development</a></h4>
                        <p>Web Application</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-4 mt60 wow fadeInUp" data-wow-delay="0.4s">
                <div class="isotope_item hover-scale">
                    <div class="item-image" data-tilt data-tilt-max="2" data-tilt-speed="1000">
                        <a href="#"><img src="{{asset('assets/images/portfolio/image-d.jpg')}}" alt="image" class="img-fluid" /> </a>
                    </div>
                    <div class="item-info">
                        <h4><a href="#">Creative App</a></h4>
                        <p>iOs, Android</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-4 mt60 wow fadeInUp" data-wow-delay="0.6s">
                <div class="isotope_item hover-scale">
                    <div class="item-image" data-tilt data-tilt-max="2" data-tilt-speed="1000">
                        <a href="#"><img src="{{asset('assets/images/portfolio/image-d.jpg')}}" alt="image" class="img-fluid" /> </a>
                    </div>
                    <div class="item-info">
                        <h4><a href="#">Brochure Design</a></h4>
                        <p>Graphic, Print</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-8 mt60 wow fadeInUp" data-wow-delay="0.8s">
                <div class="isotope_item hover-scale">
                    <div class="item-image" data-tilt data-tilt-max="2" data-tilt-speed="1000">
                        <a href="#"><img src="{{asset('assets/images/portfolio/image-d.jpg')}}" alt="image" class="img-fluid" /> </a>
                    </div>
                    <div class="item-info">
                        <h4><a href="#">Icon Pack</a></h4>
                        <p>iOs, Android</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Portfolio-->


<!--Start Clients-->
<section class="clients-section- bg-gradient15 pad-tb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="common-heading">
                    <span>Our happy customers</span>
                    <h2 class="mb30">Some of our Clients</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="clients-logos text-center col-12">
                    <div class="weworkfor pt20 pb20">
                        <div class="container">
                            <div class="logo-weworkfor owl-carousel">
                                <div class="items"><img src="{{asset('assets/images/client/clients-1.png')}}" alt="niwax html template" class="img100w"></div>
                                <div class="items"><img src="{{asset('assets/images/client/clients-2.png')}}" alt="niwax html template" class="img100w"></div>
                                <div class="items"><img src="{{asset('assets/images/client/clients-3.png')}}" alt="niwax html template" class="img100w"></div>
                                <div class="items"><img src="{{asset('assets/images/client/clients-4.png')}}" alt="niwax html template" class="img100w"></div>
                                <div class="items"><img src="{{asset('assets/images/client/clients-5.png')}}" alt="niwax html template" class="img100w"></div>
                                <div class="items"><img src="{{asset('assets/images/client/clients-6.png')}}" alt="niwax html template" class="img100w"></div>
                                <div class="items"><img src="{{asset('assets/images/client/clients-7.png')}}" alt="niwax html template" class="img100w"></div>
                                <div class="items"><img src="{{asset('assets/images/client/clients-8.png')}}" alt="niwax html template" class="img100w"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Clients-->


<!--Start Badges-->
<section class="badges-section bg-gradient5  pad-tb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="common-heading w-tdxt">
                    <span>WE MAKE RELATIONSHIPS</span>
                    <h2>Ranked as #1 Top Web & App Development Companies</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-6 wow fadeIn" data-wow-delay=".2s">
                <div class="badges-content">
                    <img src="{{asset('assets/images/about/badges-a.png')}}" alt="budges" class="img-fluid">
                    <p>ABC DEF Industry Leader</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6 wow fadeIn" data-wow-delay=".4s">
                <div class="badges-content">
                    <img src="{{asset('assets/images/about/badges-b.png')}}" alt="budges" class="img-fluid">
                    <p>Best eCommerce Development Company</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6 wow fadeIn" data-wow-delay=".6s">
                <div class="badges-content">
                    <img src="{{asset('assets/images/about/badges-c.png')}}" alt="budges" class="img-fluid">
                    <p>ABC DEF High Performer Winner</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6 wow fadeIn" data-wow-delay=".8s">
                <div class="badges-content">
                    <img src="{{asset('assets/images/about/badges-d.png')}}" alt="budges" class="img-fluid">
                    <p>Top App Developer 2019-20</p>
                </div>
            </div>
        </div>
        <div class="-cta-btn mt70">
            <div class="free-cta-title v-center wow fadeInUp" data-wow-delay="1s">
                <p>We <span>Promise.</span> We <span>Deliver.</span></p>
                <a href="{{route('contact')}}" class="btn-main bg-btn2 lnk">Let's Work Together<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
            </div>
        </div>
    </div>
</section>
<!--End Badges-->


<!--Start work-category-->
<section class="work-category pad-tb">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 v-center">
                <div class="common-heading text-l">
                    <span>Industries we work for</span>
                    <h2>our Working Sectors</h2>
                    <p>Successfully delivered digital products Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="work-card-set">
                    <div class="icon-set wow fadeIn" data-wow-delay=".2s">
                        <div class="work-card cd1">
                            <div class="icon-bg"><img src="{{asset('assets/images/icons/icon-1.png')}}" alt="Industries" /></div>
                            <p>Social Networking</p>
                        </div>
                    </div>
                    <div class="icon-set wow fadeIn" data-wow-delay=".4s">
                        <div class="work-card cd2">
                            <div class="icon-bg"><img src="{{asset('assets/images/icons/icon-2.png')}}" alt="Industries" /></div>
                            <p>Digital Marketing</p>
                        </div>
                    </div>
                    <div class="icon-set wow fadeIn" data-wow-delay=".6s">
                        <div class="work-card cd3">
                            <div class="icon-bg"><img src="{{asset('assets/images/icons/icon-3.png')}}" alt="Industries" /></div>
                            <p>Ecommerce Development</p>
                        </div>
                    </div>
                    <div class="icon-set wow fadeIn" data-wow-delay=".8s">
                        <div class="work-card cd4">
                            <div class="icon-bg"><img src="{{asset('assets/images/icons/icon-4.png')}}" alt="Industries" /></div>
                            <p>Video Service</p>
                        </div>
                    </div>
                    <div class="icon-set wow fadeIn" data-wow-delay="1s">
                        <div class="work-card cd5">
                            <div class="icon-bg"><img src="{{asset('assets/images/icons/icon-5.png')}}" alt="Industries" /></div>
                            <p>Banking Service</p>
                        </div>
                    </div>
                    <div class="icon-set wow fadeIn" data-wow-delay="1.2s">
                        <div class="work-card cd6">
                            <div class="icon-bg"><img src="{{asset('assets/images/icons/icon-6.png')}}" alt="Industries" /></div>
                            <p>Enterprise Service</p>
                        </div>
                    </div>
                    <div class="icon-set wow fadeIn" data-wow-delay="1.4s">
                        <div class="work-card cd7">
                            <div class="icon-bg"><img src="{{asset('assets/images/icons/icon-7.png')}}" alt="Industries" /></div>
                            <p>Education Service</p>
                        </div>
                    </div>
                    <div class="icon-set wow fadeIn" data-wow-delay="1.6s">
                        <div class="work-card cd8">
                            <div class="icon-bg"><img src="{{asset('assets/images/icons/icon-8.png')}}" alt="Industries" /></div>
                            <p>Tour and Travels</p>
                        </div>
                    </div>
                    <div class="icon-set wow fadeIn" data-wow-delay="1.8s">
                        <div class="work-card cd9">
                            <div class="icon-bg"><img src="{{asset('assets/images/icons/icon-9.png')}}" alt="Industries" /></div>
                            <p>Health Service</p>
                        </div>
                    </div>
                    <div class="icon-set wow fadeIn" data-wow-delay="2s">
                        <div class="work-card cd10">
                            <div class="icon-bg"><img src="{{asset('assets/images/icons/icon-10.png')}}" alt="Industries" /></div>
                            <p>Event & Ticket</p>
                        </div>
                    </div>
                    <div class="icon-set wow fadeIn" data-wow-delay="2.2s">
                        <div class="work-card cd11">
                            <div class="icon-bg"><img src="{{asset('assets/images/icons/icon-11.png')}}" alt="Industries" /></div>
                            <p>Restaurant Service</p>
                        </div>
                    </div>
                    <div class="icon-set wow fadeIn" data-wow-delay="2.4s">
                        <div class="work-card cd12">
                            <div class="icon-bg"><img src="{{asset('assets/images/icons/icon-12.png')}}" alt="Industries" /></div>
                            <p>Business Consultant</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End  work-category-->


<!--Start CTA-->
<section class="cta-area pad-tb bg-gradient5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="common-heading">
                    <span>Let's work together</span>
                    <h2>We Love to Listen to Your Requirements</h2>
                    <a href="javascript:void(0)" class="btn-outline">Let's Discuss About Your Project<i class="fas fa-chevron-right fa-icon"></i></a>

                </div>
            </div>
        </div>
    </div>
</section>
<!--End CTA-->


@endsection
