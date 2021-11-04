@extends('Layout.mother_layout')
@section('content')

<!--Breadcrumb Area-->
<section class="breadcrumb-area banner-5">
    <div class="text-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 v-center">
                    <div class="bread-inner">
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
            @foreach($caseStudyDetails as $case_study)
            <div class="col-lg-4 col-sm-6">
                <div class="full-image-card hover-scale">
                    <div class="image-div"><a href="{{route('allCaseStudy',[$case_study->thumbnail_case_study_title])}}"><img src="{{url($case_study->thumbnail_case_study_image)}}" alt="case-study" class="img-fluid" /></a></div>
                    <div class="info-text-block">
                        <h4><a href="#">{{$case_study->thumbnail_case_study_title}}</a></h4>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</section>
<!--End Case Study-->

@endsection
