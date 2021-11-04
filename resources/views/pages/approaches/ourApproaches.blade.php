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

        <div class="row upset justify-content-center mt60">
            <div class="col-lg-4 v-center order1">
                <div class="image-block1">
                    <img src="{{asset('assets/images/vectorpaint.svg')}}" alt="Process" class="img-fluid" />
                </div>
            </div>
            <div class="col-lg-7 v-center order2 wow fadeInUp" data-wow-delay=".2s">
                <div class="ps-block">
                    <span>1</span>
                    <h3 class="text-radius text-light text-animation bg-b">Collect Data</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                </div>
            </div>
        </div>
        <div class="row upset justify-content-center mt60">
            <div class="col-lg-7 v-center order2 wow fadeInUp" data-wow-delay=".2s">
                <div class="ps-block">
                    <span>2</span>
                    <h3 class="text-radius text-light text-animation bg-b">Make an strategy</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                </div>
            </div>
            <div class="col-lg-4 v-center order1" style="margin-top: 10px;">
                <div class="image-block1">
                    <img src="{{asset('assets/images/prototype.svg')}}" alt="Process" class="img-fluid" />
                </div>
            </div>
        </div>
        <div class="row upset justify-content-center mt60">
            <div class="col-lg-4 v-center order1" style="margin-top: 10px;">
                <div class="image-block1">
                    <img src="{{asset('assets/images/deployment.svg')}}" alt="Process" class="img-fluid" />
                </div>
            </div>
            <div class="col-lg-7 v-center order2 wow fadeInUp" data-wow-delay=".2s">
                <div class="ps-block">
                    <span>3</span>
                    <h3 class="text-radius text-light text-animation bg-b">Development</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
            </div>
        </div>
        <div class="row upset justify-content-center mt60">
            <div class="col-lg-7 v-center order2 wow fadeIn" data-wow-delay=".2s">
                <div class="ps-block">
                    <span>4</span>
                    <h3 class="text-radius text-light text-animation bg-b">Deployment</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
            </div>
            <div class="col-lg-4 v-center order1" style="margin-top: 10px;">
                <div class="image-block1">
                    <img src="{{asset('assets/images/maintenance.svg')}}" alt="Process" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Process-->

@endsection
