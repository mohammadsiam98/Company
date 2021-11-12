@extends('Layout.mother_layout')
@section('content')

<!--Breadcrumb Area-->
<section class="breadcrumb-area banner-3">
    <div class="text-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 v-center">
                    <div class="bread-inner">
                        <div class="bread-title">
                            <h2>Our Projects</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Breadcrumb Area-->

<!--Start Portfolio-->
<section class="portfolio-page pad-tb">
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-lg-12 v-center">
                <div class="filters">
                    <ul class="filter-menu">
                        <li data-filter="*" class="is-checked">All</li>
                        <li data-filter=".website">Static Website</li>
                        <li data-filter=".wordpress">Wordpress Website</li>
                        <li data-filter=".managementSoftware">Management Software</li>
                        <li data-filter=".landingWebsite">Landing Page</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row card-list">
            <div class="col-lg-4 col-md-6 grid-sizer"></div>
            <div class="col-lg-4 col-sm-4 mt40 single-card-item website">
                <div class="isotope_item up-hor">
                    <div class="item-image">
                        <a href="#"><img src="{{asset('assets/images/portfolio/app-img1.jpg')}}" alt="image" class="img-fluid" /> </a>
                    </div>
                    <div class="item-info-div shdo">
                        <h4><a href="#">Pets Care & Training App</a></h4>
                        <p>iOs, Android</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 mt40 single-card-item website">
                <div class="isotope_item up-hor">
                    <div class="item-image">
                        <a href="#"><img src="{{asset('assets/images/portfolio/app-img1.jpg')}}" alt="image" class="img-fluid" /> </a>
                    </div>
                    <div class="item-info-div shdo">
                        <h4><a href="#">Car Rental App</a></h4>
                        <p>Graphic, Print</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 mt40 single-card-item app wordpress">
                <div class="isotope_item up-hor">
                    <div class="item-image">
                        <a href="#"><img src="{{asset('assets/images/slide3-mckp1.png')}}" alt="image" class="img-fluid" /> </a>
                    </div>
                    <div class="item-info-div shdo">
                        <h4><a href="#">Event Management App</a></h4>
                        <p>Graphic, Print</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 mt40 single-card-item managementSoftware">
                <div class="isotope_item up-hor">
                    <div class="item-image">
                        <a href="#"><img src="{{asset('assets/images/portfolio/app-img1.jpg')}}" alt="image" class="img-fluid" /> </a>
                    </div>
                    <div class="item-info-div shdo">
                        <h4><a href="#">Car Rental App</a></h4>
                        <p>Graphic, Print</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 mt40 single-card-item landingWebsite">
                <div class="isotope_item up-hor">
                    <div class="item-image">
                        <a href="#"><img src="{{asset('assets/images/portfolio/app-img1.jpg')}}" alt="image" class="img-fluid" /> </a>
                    </div>
                    <div class="item-info-div shdo">
                        <h4><a href="#">Car Rental App</a></h4>
                        <p>Graphic, Print</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--End Portfolio-->


@endsection
