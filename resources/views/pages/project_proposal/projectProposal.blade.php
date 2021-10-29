@extends('Layout.mother_layout')
@section('content')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;700&display=swap" rel="stylesheet">
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
                    <form action="{{route('ProjectProposalDetails.store')}}" id="contactForm" data-toggle="validator" class="shake">
                        <div class="form-group">

                            <input type="text" id="name" name="name" placeholder="Enter name" required data-error="Please fill Out" style="font-family: 'Hind Siliguri', sans-serif; font-size:28px; font-weight:bold;">
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <input type="text" id="email" name="email" placeholder="Enter Email" style="font-family: 'Hind Siliguri', sans-serif; font-size:28px; font-weight:bold;" required data-error="Please fill Out">
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <input type="text" id="refSite" name="refSite" placeholder="Enter Refference Site" style="font-family: 'Hind Siliguri', sans-serif; font-size:28px; font-weight:bold;" required data-error="Please fill Out">
                            <div class="help-block with-errors"></div>
                        </div>



                        <div class="form-group">
                            <textarea name="message" rows="5" placeholder="Enter your message" style="font-family: 'Hind Siliguri', sans-serif; font-size:28px; font-weight:bold;" required></textarea>
                            <div class="help-block with-errors"></div>
                        </div>

                        <button type="submit" id="form-submit" class="btn lnk btn-main bg-btn">Submit</button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                        <p class="trm"><i class="fas fa-lock"></i> <b>We hate spam, and we respect your privacy.</b> </p>
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

@endsection
