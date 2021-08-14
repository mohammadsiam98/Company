@extends('Layout.mother_layout')
@section('content')

<!--Breadcrumb Area-->
<section class="breadcrumb-area" data-background="{{asset('images/hero/bg-gradient10.jpg')}}">
    <div class="text-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 v-center">
                    <div class="bread-inner">
                        <div class="bread-menu">
                            <ul>
                                <li><a href="{{route('homepage')}}" style="color: white">Home</a></li>
                                <li><a href="{{route('aboutUs')}}" style="color: white">About Us</a></li>
                            </ul>
                        </div>
                        <div class="bread-title">
                            <h2>About Company</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Breadcrumb Area-->

<!--Start About-->
<section class="about-agency pad-tb block-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 v-center">
                <div class="about-image">
                    <img src="{{asset('assets/images/aboutUs.svg')}}" alt="about us" class="img-fluid" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="common-heading text-l ">
                    <span>About Us</span>
                    <h1 class="text-radius text-light text-animation bg-b">About Agency</h1>
                    <p>{{$aboutDetails->agency_details}}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End About-->


<!--Start About-->
<section class="about-sec bg-gradient5 pad-tb">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-10">
                <div class="common-heading">
                    <span>We Are Creative Agency</span>
                    <h1 class="mb30">Why Choose <span class="text-radius text-light text-animation bg-b">Salahuddin IT</span></h1>
                    <p>{{$aboutDetails->whyChooseUsDetails}}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End About-->


<!--why choose-->
<section class="why-choos-lg pad-tb">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                @foreach($strengths_1 as $about)
                <div class="itm-media-object mt40 tilt-3d">
                    <div class="media mt-40">
                        <div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"><img src="{{asset('assets/images/icons/computers.svg')}}" alt="icon" class="layer"></div>
                        <div class="media-body">
                            <h4>{{$about->strength_title}}</h4>
                            <p>{{$about->strength_description}}.</p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="col-lg-6">
                @foreach($strengths_2 as $about)
                <div class="itm-media-object mt40 tilt-3d">
                    <div class="media mt-40">
                        <div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"><img src="{{asset('assets/images/icons/computers.svg')}}" alt="icon" class="layer"></div>
                        <div class="media-body">
                            <h4>{{$about->strength_title}}</h4>
                            <p>{{$about->strength_description}}.</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!--End why choose-->


<section class="why-choose pad-tb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="common-heading">
                    <span>We Are Awesome</span>
                    <h2 class="mb30">Why Choose Us</h2>
                </div>
            </div>
        </div>
        <div class="row upset">
            <div class="col-lg-3 col-sm-6 mt30">
                <div class="s-block up-hor">
                    <div class="s-card-icon"><img src="{{asset('assets/images/icons/research.svg')}}" alt="service" class="img-fluid" /></div>
                    <h4>Reasearch and Analysis</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mt30">
                <div class="s-block up-hor">
                    <div class="s-card-icon"><img src="{{asset('assets/images/icons/chat.svg')}}" alt="service" class="img-fluid" /></div>
                    <h4>Negotiation and power</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mt30">
                <div class="s-block up-hor">
                    <div class="s-card-icon"><img src="{{asset('assets/images/icons/monitor.svg')}}" alt="service" class="img-fluid" /></div>
                    <h4>Creative and innovative solutions</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mt30">
                <div class="s-block up-hor">
                    <div class="s-card-icon"><img src="{{asset('assets/images/icons/trasparency.svg')}}" alt="service" class="img-fluid" /></div>
                    <h4>Trasparency and ease of work</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End why-choose-->

@endsection
