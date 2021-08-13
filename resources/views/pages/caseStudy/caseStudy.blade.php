@extends('Layout.mother_layout')
@section('content')

<!--Breadcrumb Area-->
<section class="breadcrumb-area banner-5">
    <div class="text-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 v-center">
                    <div class="bread-inner">
                        <div class="bread-menu">
                            <ul>
                                <li><a href="index-2.html">Home</a></li>
                                <li><a href="#">Case Study</a></li>
                            </ul>
                        </div>
                        <div class="bread-title">
                            <h2>Case Studies</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Breadcrumb Area-->

<!--Start Case Study-->
<section class="case-study pad-tb pt40">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-6">
                <div class="full-image-card hover-scale">
                    <div class="image-div"><a href="#"><img src="{{asset('assets/images/case-study/img-1.jpg')}}" alt="case-study" class="img-fluid" /></a></div>
                    <div class="info-text-block">
                        <h4><a href="#">Food Delivery Application</a></h4>
                        <p>Ios | Android | Bootstrap | Jquery</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="full-image-card hover-scale">
                    <div class="image-div"><a href="#"><img src="{{asset('assets/images/case-study/img-2.jpg')}}" alt="case-study" class="img-fluid" /></a></div>
                    <div class="info-text-block">
                        <h4><a href="#">Real Estate Project</a></h4>
                        <p>Ios | Android | Bootstrap | Jquery</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="full-image-card hover-scale">
                    <div class="image-div"><a href="#"><img src="{{asset('assets/images/case-study/img-3.jpg')}}" alt="case-study" class="img-fluid" /></a></div>
                    <div class="info-text-block">
                        <h4><a href="#">Interior Decoration</a></h4>
                        <p>Ios | Android | Bootstrap | Jquery</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="full-image-card hover-scale">
                    <div class="image-div"><a href="#"><img src="{{asset('assets/images/case-study/img-4.jpg')}}" alt="case-study" class="img-fluid" /></a></div>
                    <div class="info-text-block">
                        <h4><a href="#">Gym Membership Portal</a></h4>
                        <p>Ios | Android | Bootstrap | Jquery</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="full-image-card hover-scale">
                    <div class="image-div"><a href="#"><img src="{{asset('assets/images/case-study/img-5.jpg')}}" alt="case-study" class="img-fluid" /></a></div>
                    <div class="info-text-block">
                        <h4><a href="#">Stock Market</a></h4>
                        <p>Ios | Android | Bootstrap | Jquery</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="full-image-card hover-scale">
                    <div class="image-div"><a href="#"><img src="{{asset('assets/images/case-study/img-6.jpg')}}" alt="case-study" class="img-fluid" /></a></div>
                    <div class="info-text-block">
                        <h4><a href="#">Business Consulting</a></h4>
                        <p>Ios | Android | Bootstrap | Jquery</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Case Study-->

@endsection
