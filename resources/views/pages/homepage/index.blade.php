@extends('Layout.mother_layout')
@section('content')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

</style>
<!--Start Hero-->
<section class="hero-card-web bg-gradient12 shape-bg3">
    <div class="hero-main-rp container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="hero-heading-sec2">
                    <h1 class="wow fadeIn" data-wow-delay="0.2s">Digital Creative Agency</h1>
                    <p class="wow fadeIn" data-wow-delay="0.4s" style="font-family: 'Poppins', sans-serif; color:white">Servicearea, your one-stop solution to all things Digital Marketing, Website Development and Designing, and Web-based Applications.</p>
                    <a href="{{route('caseStudy')}}" class="btn-main bg-btn lnk wow fadeIn" data-wow-delay="0.8s">View Case Studies <i class="fas fa-chevron-right fa-ani"></i><span class="circle"></span></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-right-scmm">
                    <div class="hero-service-cards wow fadeInRight" data-wow-duration="2s">
                        <div class="owl-carousel service-card-prb">
                            <div class="service-slide card-bg-a" data-tilt data-tilt-max="5" data-tilt-speed="1000">
                                <a href="{{route('sectors','Web-Design')}}">
                                    <div class="service-card-hh">
                                        <div class="image-sr-mm">
                                            <img alt="custom-sport" src="{{asset('assets/images/Website Creator-bro.svg')}}">
                                        </div>
                                        <div class="title-serv-c" style="font-family: 'Poppins', sans-serif; color:white">Website Design</div>
                                    </div>
                                </a>
                            </div>
                            <div class="service-slide card-bg-b" data-tilt data-tilt-max="5" data-tilt-speed="1000">
                                <a href="{{route('sectors','App-Development')}}">
                                    <div class="service-card-hh">
                                        <div class="image-sr-mm">
                                            <img alt="custom-sport" src="{{asset('assets/images/App development-bro.svg')}}">
                                        </div>
                                        <div class="title-serv-c" style="font-family: 'Poppins', sans-serif; color:white">Mobile Application</div>
                                    </div>
                                </a>
                            </div>
                            <div class="service-slide card-bg-c" data-tilt data-tilt-max="5" data-tilt-speed="1000">
                                <a href="{{route('sectors','Website-Development')}}">
                                    <div class="service-card-hh">
                                        <div class="image-sr-mm">
                                            <img alt="custom-sport" src="{{asset('assets/images/Open source-bro.svg')}}">
                                        </div>
                                        <div class="title-serv-c" style="font-family: 'Poppins', sans-serif; color:white">Webite Development</div>
                                    </div>
                                </a>
                            </div>
                            <div class="service-slide card-bg-d" data-tilt data-tilt-max="5" data-tilt-speed="1000">
                                <a href="{{route('sectors','Graphics-Design')}}">
                                    <div class="service-card-hh">
                                        <div class="image-sr-mm">
                                            <img alt="custom-sport" src="{{asset('assets/images/Designer-cuate.svg')}}">
                                        </div>
                                        <div class="title-serv-c" style="font-family: 'Poppins', sans-serif; color:white">Graphics Design</div>
                                    </div>
                                </a>
                            </div>
                            <div class="service-slide card-bg-e" data-tilt data-tilt-max="5" data-tilt-speed="1000">
                                <a href="{{route('sectors','Social_media_marketing')}}">
                                    <div class="service-card-hh">
                                        <div class="image-sr-mm">
                                            <img alt="custom-sport" src="{{asset('assets/images/Mobile Marketing-bro.svg')}}">
                                        </div>
                                        <div class="title-serv-c" style="font-family: 'Poppins', sans-serif; color:white"><span>Digital Marketing</div>
                                    </div>
                                </a>
                            </div>
                            <div class="service-slide card-bg-f" data-tilt data-tilt-max="5" data-tilt-speed="1000">
                                <a href="{{route('sectors','Video-Editing')}}">
                                    <div class="service-card-hh">
                                        <div class="image-sr-mm">
                                            <img alt="custom-sport" src="{{asset('assets/images/Video files-bro.svg')}}">
                                        </div>
                                        <div class="title-serv-c" style="font-family: 'Poppins', sans-serif; color:white">Video Editing</div>
                                    </div>
                                </a>
                            </div>
                            <div class="service-slide card-bg-b" data-tilt data-tilt-max="5" data-tilt-speed="1000">
                                <a href="{{route('sectors','Content-Writing')}}">
                                    <div class="service-card-hh">
                                        <div class="image-sr-mm">
                                            <img alt="custom-sport" src="{{asset('assets/images/Novelist writing-bro.svg')}}">
                                        </div>
                                        <div class="title-serv-c" style="font-family: 'Poppins', sans-serif; color:white">Content Writing</div>
                                    </div>
                                </a>
                            </div>

                            <div class="service-slide card-bg-a" data-tilt data-tilt-max="5" data-tilt-speed="1000">
                                <a href="{{route('sectors','Search-Engine-Optimization')}}">
                                    <div class="service-card-hh">
                                        <div class="image-sr-mm">
                                            <img alt="custom-sport" src="{{asset('assets/images/Search engines-bro.svg')}}">
                                        </div>
                                        <div class="title-serv-c" style="font-family: 'Poppins', sans-serif; color:white"><span>Search Engine Optimization</div>
                                    </div>
                                </a>
                            </div>

                            <div class="service-slide card-bg-c" data-tilt data-tilt-max="5" data-tilt-speed="1000">
                                <a href="{{route('sectors','Photography')}}">
                                    <div class="service-card-hh">
                                        <div class="image-sr-mm">
                                            <img alt="custom-sport" src="{{asset('assets/images/Studio photographer-cuate.svg')}}">
                                        </div>
                                        <div class="title-serv-c" style="font-family: 'Poppins', sans-serif; color:white"><span>Photography</div>
                                    </div>
                                </a>
                            </div>
                            <div class="service-slide card-bg-e" data-tilt data-tilt-max="5" data-tilt-speed="1000">
                                <a href="{{route('sectors','Cinematography')}}">
                                    <div class="service-card-hh">
                                        <div class="image-sr-mm">
                                            <img alt="custom-sport" src="{{asset('assets/images/Recording a movie-cuate.svg')}}">
                                        </div>
                                        <div class="title-serv-c" style="font-family: 'Poppins', sans-serif; color:white"><span>Cinematography</div>
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
                    <h1 class="mb30" style="font-family: 'Poppins', sans-serif;"><span class="text-second" style="font-family: 'Poppins', sans-serif;">Top-rated</span> Web And Mobile App Development Company</h1>
                    <p style="font-family: 'Poppins', sans-serif;">Digital Marketing practices allows your business to gain a boost in its sales exponentially by making it more visible and easily accessible to more customers. It is more cost-effective and efficient than traditional methods of marketing, helps build a brand name, generates better revenue and connects well with social media. In the same line, Web Development and Web Designing helps to garner more attention to your businesses on online platforms and help business firms retain the consistency of your services.
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
                <p>For more information <span>Contact with us</span></p>
                <a href="{{route('contact')}}" class="btn-main bg-btn2 lnk">Contact us<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
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

        <div class="-cta-btn mt35">
            <div class="free-cta-title v-center wow fadeInUp" data-wow-delay="1s">
                <p style="font-family: 'Poppins', sans-serif;">We <span>Promise.</span> We <span>Deliver.</span></p>
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
                    <span style="font-family: 'Poppins', sans-serif;">Industries we work for</span>
                    <h2 style="font-family: 'Poppins', sans-serif;">our Working Sectors</h2>
                    <p style="font-family: 'Poppins', sans-serif;">Successfully delivered digital products Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
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
                    <h2 style="font-family: 'Poppins', sans-serif;">We Love to Listen to Your Requirements</h2>
                    <a href="javascript:void(0)" class="btn-outline">Let's Discuss About Your Project<i class="fas fa-chevron-right fa-icon"></i></a>

                </div>
            </div>
        </div>
    </div>
</section>
<!--End CTA-->


@endsection
