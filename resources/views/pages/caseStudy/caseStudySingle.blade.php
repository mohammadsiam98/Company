@extends('Layout.mother_layout')
@section('content')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@600&display=swap');

</style>

<!--Breadcrumb Area-->
<section class="breadcrumb-area banner-5">
    <div class="text-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 v-center">
                    <div class="bread-inner">
                        <div class="bread-title">
                            <h2>Our Case Studies</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Breadcrumb Area-->

<!--Start Case Study About-->
<section class="case-study pad-tb">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="image-block upset hover-scale wow fadeInLeft">
                    <img src="{{url($singleCaseStudy->About_the_project_image)}}" alt="case study" class="img-fluid no-shadow" />
                </div>
            </div>
            <div class="col-lg-6 block-1 v-center">
                <div class="common-heading inner-heading text-l pl25">
                    <span>About The Project</span>
                    <h2>{{$singleCaseStudy->About_the_project_title}}</h2>
                    <p>{!!$singleCaseStudy->About_the_project_details!!}</p>

                </div>
                @foreach ($singleCaseStudyStackImages as $StackImagesAboutProject)
                <div class="project-platform mt60 pl25 hover-scale wow fadeInUp">
                    <div class="project-platform-used -shadow"><a href="#"><img src="{{url($StackImagesAboutProject->image)}}" alt="image"></a></div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
<!--End Case Study About-->


<section class="case-study pad-tb bg-gradient6 deep-dark">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="common-heading">
                    <span>App Features</span>
                    <h2 class="mb30">As per client's need Niwax has developed Food Delivery App.</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h4 class="mt20 mb10">App Features</h4>
                <ul class="list-style- mt30 wow fadeInUp">
                    <li>{!!$singleCaseStudy->app_features!!}</li>
                </ul>
            </div>

        </div>
    </div>
</section>

<!--Start Project Challenges-->
<section class="case-study pad-tb">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <h2 class="mt20 mb20">Challenges</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <ul class="list-style- mt30 wow fadeInUp">
                    <li>{!!$singleCaseStudy->challenges!!}</li>
                </ul>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="project-view m-mt30">
                    <img src="{{asset('assets/images/case-study/app-view.png')}}" alt="case study" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Project Challenges-->

<!--Start Solutions-->
<section class="case-study pad-tb bg-gradient5 deep-dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 block-1 v-center">
                <div class="common-heading inner-heading text-l pr25">
                    <div class="common-heading text-l">
                        <h1 class="mt0 mb0 text-radius text-light text-animation bg-b" style="text-align: center">How we work</h1>
                        <p class="mb60 mt10" style="text-align: center">We will catch you as early as we receive the message</p>
                    </div>
                    <h4>{{$singleCaseStudy->solution_title}}</h4>
                    <p>{!!$singleCaseStudy->solution_details!!}</p>
                </div>
                <div class="card-nx row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-6 mt30">
                        <div class="icon-card-">
                            <img src="{{asset('assets/images/icons/logo-and-branding.svg')}}" alt="case study" class="img-fluid">
                            <h4>UI/UX Design</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-6 mt30">
                        <div class="icon-card-">
                            <img src="{{asset('assets/images/icons/branding.svg')}}" alt="case study" class="img-fluid">
                            <h4>Front-end Dev</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-6 mt30">
                        <div class="icon-card-">
                            <img src="{{asset('assets/images/icons/back.svg')}}" alt="case study" class="img-fluid">
                            <h4>Back-end Dev</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-6 mt30">
                        <div class="icon-card-">
                            <img src="{{asset('assets/images/icons/seo.svg')}}" alt="case study" class="img-fluid">
                            <h4>SEO Optimization</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Solutions-->
<div class="case-study pad-tb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="common-heading text-l">
                    <h1 class="mt0 mb0 text-radius text-light text-animation bg-b" style="text-align: center">Project Screenshots</h1>
                    <p class="mb60 mt10" style="text-align: center">We will catch you as early as we receive the message</p>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="project-screens owl-carousel">
                    @foreach ($singleCaseStudySliderImages as $Slider)
                    <div class="screen-splits">
                        <img src="{{url($Slider->image)}}" alt="case study" class="img-fluid" />
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!--Start Result-->
<section class="case-study pad-tb deep-dark">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="common-heading">
                    <h2 class="mb30">See The Result</h2>
                </div>
            </div>
        </div>
        <div class="row in-stats card-stats">
            <div class="col-lg-3 col-sm-6 col-6 mt30">
                <div class="statistics">
                    <div class="statnumb">
                        <span class="counter">20</span><span>%</span>
                        <p>ROI Increase</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-6 mt30">
                <div class="statistics">
                    <div class="statnumb counter-number">
                        <span class="counter">40</span><span>%</span>
                        <p>Traffic Increase</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-6 mt30">
                <div class="statistics">
                    <div class="statnumb counter-number">
                        <span class="counter">30</span><span>%</span>
                        <p>Order Increase</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-6 mt30">
                <div class="statistics">
                    <div class="statnumb counter-number">
                        <span class="counter">60</span><span>%</span>
                        <p>Order Increase</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Result-->
<!--Start reveiws-->
<section class="reviews-block bg-gradient5 pad-tb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="common-heading ptag">
                    <span>Reviews</span>

                    <div class="common-heading text-l">
                        <h1 class="mt0 mb0 text-radius text-light text-animation bg-b" style="text-align: center">Client Testimonials</h1>
                        <p class="mb60 mt10" style="text-align: center">We will catch you as early as we receive the message</p>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mt30">
                <div class="reviews-card pr-shadow">
                    <div class="row v-center">
                        <div class="col"> <span class="revbx-lr"><i class="fas fa-quote-left"></i></span> </div>
                        <div class="col"> <span class="revbx-rl"><img src="{{asset('assets/images/comments.png')}}" alt="review service logo"></span> </div>
                    </div>
                    <div class="review-text">
                        <p>{{$singleCaseStudy->client_testimonials}}</p>
                    </div>
                    <div class="-client-details-" style="display: flex; flex-direction:column;">
                        <div class="reviewer-text">
                            <img src="{{asset('assets/images/user.png')}}" style="float: left; width:auto;" alt="review service logo">
                            <h5 style="position:relative; left:10px;">{{$singleCaseStudy->client_name}}</h5>

                            <p class="company_clients_position" style="display: inline-flex; margin-left:11px">{{$singleCaseStudy->client_designation}}</small></p>
                            <div class="star-rate">
                                <ul>
                                    <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                    <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                    <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                    <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                    <li> <a href="javascript:void(0)"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End reviews-->
@endsection
