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
                                <li><a href="">Home</a></li>
                                <li><a href="#">Mission and Vision</a></li>
                            </ul>
                        </div>
                        <div class="bread-title">
                            <h2>Mission and Vision</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Breadcrumb-->

<section class="service pad-tb">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="image-block upset bg-shape">
                    <img src="{{asset('assets/images/goals.svg')}}" alt="image" class="img-fluid" />
                </div>
            </div>
            <div class="col-lg-8 block-1">
                <div class="common-heading text-l pl25">
                    <span>Mission</span>
                    <h1 class="text-radius text-light text-animation bg-b">Our Mission</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. is simply dummy text of the printing and typesetting industry. </p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="service pad-tb">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 block-1">
                <div class="common-heading text-l pr25">
                    <span>Vision</span>
                    <h1 class="text-radius text-light text-animation bg-b">Our Vision</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. is simply dummy text of the printing and typesetting industry. </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="image-block upset bg-shape m-mt30 mb0">
                    <img src="{{asset('assets/images/vission.svg')}}" alt="image" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
