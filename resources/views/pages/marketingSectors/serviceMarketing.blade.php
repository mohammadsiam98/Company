@extends('Layout.mother_layout')
@section('content')

@if(!@empty($serviceOverview->page_heading))
<!--Breadcrumb Area-->
<section class="breadcrumb-areav2" data-background="{{asset('assets/images/banner/6.jpg')}}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="bread-titlev2">
                    <h1 class="wow fadeInUp" data-wow-delay=".2s">{{$serviceOverview->page_heading}}</h1>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

@if(!@empty($serviceOverview->image))
<!--Start About-->
<section class="service pad-tb">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="image-block upset bg-shape wow fadeIn">
                    <img src="{{url($serviceOverview->image)}}" alt="image" class="img-fluid" />
                </div>
            </div>
            <div class="col-lg-8 block-1">
                <div class="common-heading text-l pl25">
                    <span>Overview</span>
                    <h2>{{$serviceOverview->service_overview_title}}</h2>
                    <p>{{$serviceOverview->service_overview_details}}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End About-->
@endif


@if(!@empty($SectorServices))
<!--Start Service-->
<section class="service-block bg-gradient6 pad-tb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="common-heading ptag">
                    <span>Service</span>
                    <h1 class="text-radius text-light text-animation bg-b">Our Services</h1>
                    <p class="mb30">We think big and have hands in all leading technology platforms to provide you wide array of services.</p>
                </div>
            </div>
        </div>
        <div class="row upset ovr-bg1 ho-gdnt">
            @foreach($SectorServices as $dynamicService)
            <div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".2s">
                <div class="s-block up-hor ovr-base">
                    <div class="nn-card-set">
                        <div class="s-card-icon"><img src="{{url($dynamicService->image)}}" alt="service" class="img-fluid" />
                        </div>
                        <h4>{{$dynamicService->service_name}}</h4>
                        <p>{{$dynamicService->service_details}}.</p>

                    </div>
                </div>
            </div>
            @endforeach
        </div>


        <div class="-cta-btn mt70">
            <div class="free-cta-title v-center wow zoomInDown" data-wow-delay="1.3s">
                <p>Hire a <span>Dedicated Developer</span></p>
                <a href="#" class="btn-main bg-btn2 lnk">Hire Now<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
            </div>
        </div>
    </div>
</section>
<!--End Service-->
@endif

{{-- @if(!@empty($SectorClients))
<!--Start Process-->
<section class="service-block pad-tb light-dark">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="common-heading ptag">
                    <span>Process</span>
                    <h1 class="text-radius text-light text-animation bg-b">{{$SectorClients->clients_header}}</h1>
<p>{{$SectorClients->clients_header_description}}.</p>
</div>
</div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="clients-logos text-center col-12">
            <div class="weworkfor pt20 pb20">
                <div class="container">
                    @foreach($SectorClientsImage as $clients)
                    <div class="logo-weworkfor owl-carousel">
                        <div class="items"><img src="{{url($clients->image)}}" alt="niwax html template" class="img100w"></div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>
<!--End Process-->
@endif --}}

@if(!@empty($SectorTechnologiesWeWillUse))
<!--Start Why Choose-->
<section class="service-block pad-tb bg-gradient7">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="common-heading ptag">
                    <span>We Deliver Our Best</span>
                    <h1 class="text-radius text-light text-animation bg-b">{{$SectorTechnologiesWeWillUse->technology_main_title}}</h1>
                    <p class="mb30">{{$SectorTechnologiesWeWillUse->technology_main_title_short_details}}.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach($SectorTechnologyDetails as $SectorTechnology)
            <div class="col-lg-6 col-sm-6 mt30  wow fadeIn" data-wow-delay=".2s">
                <div class="s-block wide-sblock">
                    <div class="s-card-icon-large"><img src="{{url($SectorTechnology->image)}}" alt="service" class="img-fluid"></div>
                    <div class="s-block-content">
                        <h4>{{ $SectorTechnology->technology_name}}</h4>
                        <p>{{ $SectorTechnology->technology_short_details}}</p>
                    </div>
                </div>
            </div>
            @endforeach



        </div>
    </div>
</section>
<!--End Why Choose-->
@endif


<!--Start Pricing-->
<section class="block-a1 pad-tb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="common-heading ptag">
                    <span>Pricing</span>
                    <h1 class="text-radius text-light text-animation bg-b">Pricing Table</h1>
                    <p class="mb0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach($pricingDetails as $price)
            <div class="col-lg-4 col-md-6">
                <div class="pricing-table mt60">

                    <div class="inner-table">
                        <img src="{{asset('assets/images/icons/money-bag.png')}}" alt="Personal" />
                        <span class="title">{{$price->planName}}</span>
                        <p class="title-sub">{{$price->small_description}}</p>
                        <h2><sup>$</sup>{{$price->basic_plan_price}}</h2>
                        <div class="details">
                            <ul>
                                <li>{!!$price->services_name!!}</li>

                            </ul>
                        </div>
                    </div>
                    <a href="#" class="btn-main bg-btn lnk">Get Started <i class="fas fa-chevron-right fa-icon"></i> <span class="circle"></span></a>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!--End Pricing-->

@if($categoryId==1 || $categoryId==2 )
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
            @foreach($creativeWorkDetails as $creativeWorks)
            <div class="col-lg-6 col-sm-8 mt60 wow fadeInUp" data-wow-delay="0.2s">
                <div class="isotope_item hover-scale">
                    <div class="item-image" data-tilt data-tilt-max="2" data-tilt-speed="1000">
                        <a href="#"><img src="{{url($creativeWorks->image)}}" alt="image" class="img-fluid" /> </a>
                    </div>
                    <div class="item-info">
                        <h4><a href="#">{{ $creativeWorks->creative_work_name}}</a></h4>
                        <p>{{ $creativeWorks->creative_work_sector}}</p>
                    </div>
                </div>
            </div>
            @endforeach



        </div>
    </div>
</section>
<!--End Portfolio-->
@endif



@endsection
