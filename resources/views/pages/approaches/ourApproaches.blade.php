@extends('Layout.mother_layout')
@section('content')


<!--Breadcrumb Area-->
<section class="breadcrumb-area banner-2">
    <div class="text-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 v-center">
                    <div class="bread-inner">
                        <div class="bread-menu">
                            <ul>
                                <li><a href="index-2.html">Home</a></li>
                                <li><a href="#">Development Process</a></li>
                            </ul>
                        </div>
                        <div class="bread-title">
                            <h2>Development Process</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Breadcrumb-->

<!--Start Process-->
<section class="service-block pad-tb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="common-heading ptag">
                    <span>Process</span>
                    <h2>Our Web Design Process</h2>
                    <p>Our design process follows a proven approach. We begin with a deep understanding of your needs and create a planning template.</p>
                </div>
            </div>
        </div>
        <div class="row upset justify-content-center mt60">
            <div class="col-lg-4 v-center order1">
                <div class="image-block1">
                    <img src="{{asset('assets/images/collect.svg')}}" alt="Process" class="img-fluid" />
                </div>
            </div>
            <div class="col-lg-7 v-center order2 wow fadeInUp" data-wow-delay=".2s">
                <div class="ps-block">
                    <span>1</span>
                    <h3 class="text-radius text-light text-animation bg-b">{{$OurApproaches1->Approach_title}}</h3>
                    <p>{{$OurApproaches1->Approach_details}}.</p>
                </div>
            </div>
        </div>
        <div class="row upset justify-content-center mt60">
            <div class="col-lg-7 v-center order2 wow fadeInUp" data-wow-delay=".2s">
                <div class="ps-block">
                    <span>2</span>
                    <h3 class="text-radius text-light text-animation bg-b">{{$OurApproaches2->Approach_title}}</h3>
                    <p>{{$OurApproaches2->Approach_details}}.</p>
                </div>
            </div>
            <div class="col-lg-4 v-center order1">
                <div class="image-block1">
                    <img src="{{asset('assets/images/prototype.svg')}}" alt="Process" class="img-fluid" />
                </div>
            </div>
        </div>
        <div class="row upset justify-content-center mt60">
            <div class="col-lg-4 v-center order1">
                <div class="image-block1">
                    <img src="{{asset('assets/images/deployment.svg')}}" alt="Process" class="img-fluid" />
                </div>
            </div>
            <div class="col-lg-7 v-center order2 wow fadeInUp" data-wow-delay=".2s">
                <div class="ps-block">
                    <span>3</span>
                    <h3 class="text-radius text-light text-animation bg-b">{{$OurApproaches3->Approach_title}}</h3>
                    <p>{{$OurApproaches3->Approach_details}}.</p>
                </div>
            </div>
        </div>
        <div class="row upset justify-content-center mt60">
            <div class="col-lg-7 v-center order2 wow fadeIn" data-wow-delay=".2s">
                <div class="ps-block">
                    <span>4</span>
                    <h3 class="text-radius text-light text-animation bg-b">{{$OurApproaches4->Approach_title}}</h3>
                    <p>{{$OurApproaches4->Approach_details}}.</p>
                </div>
            </div>
            <div class="col-lg-4 v-center order1">
                <div class="image-block1">
                    <img src="{{asset('assets/images/maintenance.svg')}}" alt="Process" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Process-->

@endsection
