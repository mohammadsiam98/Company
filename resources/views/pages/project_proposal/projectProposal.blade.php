@extends('Layout.mother_layout')
@section('content')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;700&display=swap" rel="stylesheet">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

</style>
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
    </symbol>
    <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
    </symbol>
</svg>


<!--Breadcrumb Area-->
<section class="breadcrumb-area banner-6">
    <div class="text-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 v-center">
                    <div class="bread-inner">

                        <div class="bread-title wow fadeInUp" data-wow-delay=".5s">
                            <h2>We value your words</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Breadcrumb Area-->

<!--Start Enquire Form-->
<section class="contact-page pad-tb">
    <div class="container">
        <div class="row">

            <div class="col-lg-4 v-center">
                <div class="contact-details">
                    <img src="{{asset('assets/images/project.png')}}" alt="">
                </div>
            </div>


            <div class="col-lg-8 m-mt30 pr30 pl30">
                <div class="common-heading text-l">
                    <h1 class="mt0 mb0 text-radius text-light text-animation bg-b">Project Proposal</h1>
                    <p class="mb60 mt10">We will catch you as early as we receive the message</p>
                </div>
                <div class="form-block">
                    <form action="{{route('ProjectProposalDetails.store')}}" id="contactForm" data-toggle="validator" class="shake" id="contact">
                        @csrf
                        @if($errors->first('name'))
                        <div class="alert alert-warning fade show" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                                <use xlink:href="#exclamation-triangle-fill" /></svg>
                            <div>
                                {{$errors->first('name')}}
                            </div>
                        </div>
                        @endif
                        @if($errors->first('email'))
                        <div class="alert  alert-danger d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                                <use xlink:href="#exclamation-triangle-fill" /></svg>
                            <div>
                                {{$errors->first('email')}}
                            </div>
                        </div>
                        @endif
                        @if($errors->first('refSite'))
                        <div class="alert alert-danger d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                                <use xlink:href="#exclamation-triangle-fill" /></svg>
                            <div>
                                {{$errors->first('refSite')}}
                            </div>
                        </div>
                        @endif
                        @if($errors->first('message'))
                        <div class="alert alert-danger d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                                <use xlink:href="#exclamation-triangle-fill" /></svg>
                            <div>
                                {{$errors->first('message')}}
                            </div>
                        </div>
                        @endif

                        <div class="form-group">
                            <input type="text" id="name" name="name" placeholder="Enter name" data-error="Please fill Out" style="font-family: 'Hind Siliguri', sans-serif; font-size:28px; font-weight:bold;">
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <input type="text" id="email" name="email" placeholder="Enter Email" style="font-family: 'Hind Siliguri', sans-serif; font-size:28px; font-weight:bold;" data-error="Please fill Out">
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <input type="text" id="refSite" name="refSite" placeholder="Enter Refference Site" style="font-family: 'Hind Siliguri', sans-serif; font-size:28px; font-weight:bold;" data-error="Please fill Out">
                            <div class="help-block with-errors"></div>
                        </div>



                        <div class="form-group">
                            <textarea name="message" rows="5" placeholder="Enter your message" style="font-family: 'Hind Siliguri', sans-serif; font-size:28px; font-weight:bold;"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>

                        <button type="submit" id="form-submit" class="btn lnk btn-main bg-btn">Submit</button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                        <p class="trm"><i class="fas fa-lock"></i> <b>We hate spam, and we respect your privacy.</b> </p>
                        <div>
                            @include('alert.messages')
                        </div>

                    </form>
                </div>
            </div>



        </div>
    </div>
</section>
<!--End Enquire Form-->


<!--Start Location-->
<div class="contact-location">
    <div class="container-fluid">

        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="map-div">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.01356758868!2d90.36875081519166!3d23.746895584591087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf1dcf1881eb%3A0x101be1ec599c5eb!2sdhanmondi%2019!5e0!3m2!1sen!2sbd!4v1635173717973!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>


    </div>
</div>
<!--End Location-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

@endsection
